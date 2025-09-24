<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductImage;
use App\Models\ProductSerial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductsController extends Controller
{
    public function getProducts()
    {
        return Product::with('category')->get();
    }

    public function getCategoryNoChild()
    {
        $leafCategories = Category::doesntHave('children')->get();
        $childCategories = Category::whereNotNull('parent_id')->get();
        $combinedCategories = $leafCategories->merge($childCategories)->unique('id');
        return $combinedCategories;
    }

    public function addNewProduct(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'quantity' => 'required|string|regex:/^[0-9]+$/',
                'status' => 'required|in:in_stock,out_stock',
                'description' => 'nullable|string',
                'price' => 'required|string|regex:/^[0-9]+$/',
                'real_price' => 'required|string|regex:/^[0-9]+$/',
                'category_id' => 'required|integer|exists:categories,id',
                'outline' => 'required|in:true,false',
                'unit' => 'required|string|max:255',
                'slug' => 'required|string|max:255',
                'guarantee' => 'string|max:255',
                'images' => 'required|array',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ],
        );

        $slug = Str::slug($request->input('slug') . '-' . time());
        $category = Category::findOrFail($request->category_id);
        $quantity = $request->input('quantity');
        $status = $request->input('status');
        if ($category->hasSerial) {
            $quantity = 0;
            $status = 'out_stock';
        }
        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'real_price' => $request->input('real_price'),
            'category_id' => $request->input('category_id'),
            'quantity' => $quantity,
            'status' => $status,
            'slug' => $slug,
            'outline' => $request->boolean('outline'),
            'unit' => $request->input('unit') ?: null,
            'guarantee' => $request->input('guarantee'),
        ]);
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $index => $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $path = 'img/products/' . $product->id . '/' . $imageName;
                $resizedImage = Image::make($image)->orientate()->resize(600, 600)->encode();
                Storage::disk('public')->put($path, $resizedImage);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $imageName,
                    'is_primary' => ($index === 0 ? true : false)
                ]);
            }
        }

        return redirect()->route('admin.product-add')->with('success', 'Sản phẩm đã thêm thành công!');
    }

    public function updateOldProduct(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'quantity' => 'required|string|regex:/^[0-9]+$/',
                'status' => 'required|in:in_stock,out_stock',
                'description' => 'nullable|string',
                'price' => 'required|string|regex:/^[0-9]+$/',
                'real_price' => 'required|string|regex:/^[0-9]+$/',
                'category_id' => 'required|integer|exists:categories,id',
                'outline' => 'required|in:true,false',
                'unit' => 'required|string|max:255',
                'slug' => 'required|string|max:255',
                'guarantee' => 'string|max:255',
            ],
        );
        try {
            $product = Product::findOrFail($request->product_id);
            if (!$product) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy sản phẩm phù hợp!'
                ]);
            } else {
                $quantity = $request->quantity;
                $status = $request->status;
                $categoryNow = Category::findOrFail($product->category_id);
                $category = Category::findOrFail($request->category_id);
                if ($category->hasSerial) {
                    $quantity = 0;
                    $status = 'out_stock';
                } else {
                    if ($categoryNow->hasSerial)
                        ProductSerial::where('product_id', $product->id)->delete();
                }
                if ($product->category_id !== $request->category_id) {
                    ProductAttribute::where('product_id', $product->id)->delete();
                }
                $product->name = $request->name;
                $product->description = $request->description;
                $product->quantity = $quantity;
                $product->status = $status;
                $product->price = $request->price;
                $product->real_price = $request->real_price;
                $product->category_id = $request->category_id;
                $product->outline = $request->boolean('outline');
                $product->unit = $request->unit;
                $product->slug = Str::slug($request->slug);
                $product->guarantee = $request->guarantee;
                $product->save();
                return response()->json([
                    'success' => true,
                    'message' => 'Đã cập nhật thành công',

                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Lỗi lòi mắt rồi homie!'
            ]);
        }
    }

    public function deleteOldProduct(Request $request)
    {
        try {
            $product = Product::findOrFail($request->product_id);
            if (!$product) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy sản phẩm phù hợp!'
                ]);
            } else {
                Storage::disk('public')->deleteDirectory('img/products/' . $product->id);
                $product->delete();
                return response()->json([
                    'success' => true,
                    'message' => 'Đã xóa thành công'
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Lỗi lòi mắt rồi homie!'
            ]);
        }
    }

    public function showFormProduct()
    {
        $cates = $this->getCategoryNoChild();
        return view('admin.pages.products_add', compact('cates'));
    }

    public function returnBlade()
    {
        $cateNoFathers = $this->getCategoryNoChild();
        $products = $this->getProducts();
        return view('admin.pages.products', compact('cateNoFathers', 'products'));
    }
}
