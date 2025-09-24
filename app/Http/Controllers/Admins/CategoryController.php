<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function getCategoryFather()
    {
        return Category::where('parent_id', null)->get();
    }

    public function getCategories()
    {
        return Category::with('parent')->get();
    }

    public function addNewCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:category,id',
            'show_in_slide' => 'required|in:true,false',
        ]);

        Category::create([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('slug')),
            'description' => $request->input('description'),
            'parent_id' => $request->input('parent_id') ?: null,
            'icon' => $request->input('icon'),
            'show_in_slide' => $request->boolean('show_in_slide')
        ]);

        return redirect()->route('admin.category-add')->with('success', 'Danh mục đã thêm thành công!');
    }

    public function updateOldCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:category,id',
            'show_in_slide' => 'required|in:true,false',
        ]);
        try {
            $category = Category::findOrFail($request->category_id);
            if (!$category) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy danh mục sản phẩm phù hợp!'
                ]);
            } else {
                $category->name = $request->name;
                $category->description = $request->description;
                $category->parent_id = $request->parent_id ?: null;
                $category->show_in_slide = $request->boolean('show_in_slide');
                $category->save();
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

    public function deleteOldCategory(Request $request)
    {
        try {
            $category = Category::findOrFail($request->category_id);
            if (!$category) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy danh mục sản phẩm phù hợp!'
                ]);
            } else {
                $category->delete();
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

    public function showFormCategory()
    {
        $cates = $this->getCategoryFather();
        return view('admin.pages.categories_add', compact('cates'));
    }

    public function returnBlade()
    {
        $cates = $this->getCategories();
        $categories = $this->getCategoryFather();
        return view('admin.pages.categories', compact('cates', 'categories'));
    }
}
