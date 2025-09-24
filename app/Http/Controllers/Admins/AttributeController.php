<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttributeController extends Controller
{

    public function addNewAttribute(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $id = Auth::guard('admin')->id();

        $attribute = Attribute::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('admin.attribute-add')->with('success', 'Thuộc tính đã thêm thành công!');
    }

    public function updateOldAttribute(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        try {
            $attribute = Attribute::findOrFail($request->attribute_id);
            if (!$attribute) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy thuộc tính phù hợp!'
                ]);
            } else {
                $attribute->name = $request->name;
                $attribute->save();
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

    public function deleteOldAttribute(Request $request)
    {
        try {
            $attribute = Attribute::findOrFail($request->attribute_id);
            if (!$attribute) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy thuộc tính phù hợp!'
                ]);
            } else {
                $attribute->delete();
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

    public function showFormaAttribute()
    {
        return view('admin.pages.attributes_add');
    }

    public function returnBlade()
    {
        $attributes = Attribute::all();
        return view('admin.pages.attributes', compact('attributes'));
    }
}
