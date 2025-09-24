<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\CategoryAttribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttributeCategoryController extends Controller
{

    public function addNewAttributeCategory(Request $request)
    {
        $request->validate([
            'category_id' => 'required|integer|exists:categories,id',
            'attribute_id' => 'required|integer|exists:attributes,id',
            'is_filter' => 'required|in:true,false',
            'icon' => 'nullable|string'
        ]);

        CategoryAttribute::create([
            'category_id' => $request->input('category_id'),
            'attribute_id' => $request->input('attribute_id'),
            'is_filter' => $request->boolean('is_filter'),
            'icon' => $request->icon,
        ]);

        return redirect()->route('admin.attribute_category-add')->with('success', 'Quan hệ đã thêm mới thành công!');
    }

    public function updateOldAttributeCategory(Request $request)
    {
        $request->validate([
            'category_id' => 'required|integer|exists:categories,id',
            'attribute_id' => 'required|integer|exists:attributes,id',
            'is_filter' => 'required|in:true,false',
            'icon' => 'nullable|string'
        ]);
        try {
            $cate_attri = CategoryAttribute::findOrFail($request->category_attribute_id);
            if (!$cate_attri) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy quan hệ phù hợp!'
                ]);
            } else {
                $cate_attri->category_id = $request->input('category_id');
                $cate_attri->attribute_id = $request->input('attribute_id');
                $cate_attri->is_filter = $request->boolean('is_filter');
                $cate_attri->icon = $request->icon;
                $cate_attri->save();
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

    public function deleteOldAttributeCategory(Request $request)
    {
        try {
            $cate_attri = CategoryAttribute::findOrFail($request->category_attribute_id);
            if (!$cate_attri) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy quan hệ phù hợp!'
                ]);
            } else {
                DB::table('product_attributes')
                    ->where('attribute_id', $cate_attri->attribute_id)
                    ->whereIn('product_id', function ($query) use ($cate_attri) {
                        $query->select('id')
                            ->from('products')
                            ->where('category_id', $cate_attri->category_id);
                    })
                    ->delete();
                $cate_attri->delete();
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

    public function showFormaAttributeCategory()
    {
        $attributes = Attribute::all();
        $categories = Category::all();
        return view('admin.pages.category_attributes_add', compact('categories', 'attributes'));
    }

    public function returnBlade()
    {
        $attributes = Attribute::all();
        $categories = Category::all();
        $category_attributes = CategoryAttribute::with('attribute', 'category')->get();
        return view('admin.pages.category_attributes', compact('category_attributes', 'categories', 'attributes'));
    }
}
