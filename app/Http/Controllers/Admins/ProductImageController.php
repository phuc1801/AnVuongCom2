<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductImageController extends Controller
{
    public function getProducts()
    {
        return Product::all();
    }

    public function getProductImages()
    {
        return ProductImage::with('product')->get();
    }

    public function addNewProductImage(Request $request)
    {
        $request->validate(
            [
                'product_id' => 'required|integer|exists:products,id',
                'is_primary' => 'required|in:true,false',
                'image' => 'required',
            ],
        );
        $imagePath = null;
        $fileName = '';
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image');
            $fileName = now()->timestamp . '_' . uniqid() . '.' . $imagePath->getClientOriginalExtension();
            $imagePath = $imagePath->storeAs('img/products/' . $request->product_id, $fileName, 'public');
        }
        ProductImage::create([
            'product_id' => $request->input('product_id'),
            'is_primary' => $request->boolean('is_primary'),
            'image' => $fileName,
        ]);

        return redirect()->route('admin.product-image-add')->with('success', 'Ảnh sản phẩm đã thêm thành công!');
    }

    public function updateOldProductImage(Request $request)
    {
        $request->validate(
            [
                'product_id' => 'required|integer|exists:products,id',
                'is_primary' => 'required|in:true,false',
            ],
        );
        try {
            $productImage = ProductImage::findOrFail($request->image_id);
            if (!$productImage) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy sản phẩm phù hợp!'
                ]);
            } else {
                $imagePath = null;
                $fileName = '';
                if ($request->hasFile('image')) {
                    if ($productImage->image) {
                        Storage::disk('public')->delete('img/products/' . $productImage->product_id . '/' . $productImage->image);
                    }
                    $imagePath = $request->file('image');
                    $fileName = now()->timestamp . '_' . uniqid() . '.' . $imagePath->getClientOriginalExtension();
                    $imagePath = $imagePath->storeAs('img/products/' . $request->product_id, $fileName, 'public');
                    $productImage->image = $fileName;
                }
                $productImage->product_id = $request->product_id;
                $productImage->is_primary = $request->boolean('is_primary');
                $productImage->save();
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

    public function deleteOldProductImage(Request $request)
    {
        try {
            $productImage = ProductImage::findOrFail($request->image_id);
            if (!$productImage) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy ảnh sản phẩm phù hợp!'
                ]);
            } else {
                Storage::disk('public')->delete('img/products/' . $productImage->product_id . '/' . $productImage->image);
                $productImage->delete();
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


    public function showFormProductImage()
    {
        $products = $this->getProducts();
        return view('admin.pages.product_image_add', compact('products'));
    }

    public function returnBlade()
    {
        $productImages = $this->getProductImages();
        $products = $this->getProducts();
        return view('admin.pages.product_images', compact('productImages', 'products'));
    }
}
