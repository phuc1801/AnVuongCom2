<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;

class AttributeProductController extends Controller
{

    public function addNewAttributeProduct(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer|exists:categories,id',
            'attribute_id' => 'required|integer|exists:attributes,id',
            'value' => 'required|string|max:255',
            'short_value' => 'required|string|max:255'
        ]);

        $exists = ProductAttribute::where('product_id', $request->product_id)
            ->where('attribute_id', $request->attribute_id)->first();
        if ($exists) {
            return redirect()->route('admin.attribute_product-add');
        }
        ProductAttribute::create([
            'attribute_id' => $request->input('attribute_id'),
            'product_id' => $request->input('product_id'),
            'value' => $request->input('value'),
            'short_value' => $request->input('short_value'),
        ]);

        return redirect()->route('admin.attribute_product-add');
    }

    public function updateOldAttributeProduct(Request $request)
    {
        $request->validate([
            'value' => 'required|string|max:255',
            'short_value' => 'required|string|max:255'
        ]);
        try {
            $pro_attr = ProductAttribute::findOrFail($request->product_attribute_id);
            if (!$pro_attr) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy giá trị phù hợp!'
                ]);
            } else {
                $pro_attr->value = $request->input('value');
                $pro_attr->short_value = $request->input('short_value');
                $pro_attr->save();
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

    public function deleteOldAttributeProduct(Request $request)
    {
        try {
            $pro_attr = ProductAttribute::findOrFail($request->product_attribute_id);
            if (!$pro_attr) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy giá trị phù hợp!'
                ]);
            } else {
                $pro_attr->delete();
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

    public function getAttributes(Product $product)
    {
        $attributes = $product->category->attributes;
        return response()->json($attributes);
    }

    public function showFormaAttributeProduct()
    {
        $attributes = Attribute::all();
        $products = Product::all();
        return view('admin.pages.product_attributes_add', compact('products', 'attributes'));
    }

    public function returnBlade()
    {
        $products = Product::with('attributes')->get();
        $product_attributes = ProductAttribute::all();
        return view('admin.pages.product_attributes', compact('product_attributes', 'products'));
    }
}
