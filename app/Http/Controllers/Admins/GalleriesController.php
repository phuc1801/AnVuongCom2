<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleriesController extends Controller
{
    public function getGalleries()
    {
        return Gallery::all();
    }

    public function addNewGallery(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'type' => 'required|in:slide,image_around_slide,banner,footer,left_banner,logo,right_banner,top_banner',
            'display_order' => 'required|integer|min:0|max:1000',
            'is_active' => 'required|in:true,false',
            'image' => 'required'
        ]);

        $imagePath = null;
        $fileName = '';
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image');
            $fileName = now()->timestamp . '_' . uniqid() . '.' . $imagePath->getClientOriginalExtension();
            $imagePath = $imagePath->storeAs('img/' . $request->type, $fileName, 'public');
        }

        Gallery::create([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'display_order' => $request->input('display_order'),
            'is_active' => $request->boolean('is_active'),
            'image' => $fileName
        ]);

        return redirect()->route('admin.gallery-add')->with('success', 'Ảnh đã thêm thành công!');
    }

    public function updateOldGallery(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'type' => 'required|in:slide,image_around_slide,banner,footer,left_banner,logo,right_banner,top_banner',
            'display_order' => 'required|integer|min:0|max:1000',
            'is_active' => 'required|in:true,false',
        ]);
        try {
            $gallery = Gallery::findOrFail($request->gallery_id);
            if (!$gallery) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy ảnh phù hợp!'
                ]);
            } else {

                $imagePath = null;
                $fileName = '';
                if ($request->hasFile('image')) {
                    if ($gallery->image) {
                        Storage::disk('public')->delete('img/' . $gallery->type . '/' . $gallery->image);
                    }
                    $imagePath = $request->file('image');
                    $fileName = now()->timestamp . '_' . uniqid() . '.' . $imagePath->getClientOriginalExtension();
                    $imagePath = $imagePath->storeAs('img/' . $request->type, $fileName, 'public');
                } else {
                    $fileName = $gallery->image;
                }
                $gallery->name = $request->name;
                $gallery->type = $request->type;
                $gallery->display_order = $request->display_order;
                $gallery->is_active = $request->boolean('is_active');
                $gallery->image = $fileName;
                $gallery->save();
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

    public function deleteOldGallery(Request $request)
    {
        try {
            $gallery = Gallery::findOrFail($request->gallery_id);
            if (!$gallery) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy ảnh phù hợp!'
                ]);
            } else {
                if ($gallery->image)
                    Storage::disk('public')->delete('img/' . $gallery->type . '/' . $gallery->image);
                $gallery->delete();
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

    public function showFormGallery()
    {
        return view('admin.pages.gallery_add');
    }

    public function returnBlade()
    {
        $galleries = $this->getGalleries();
        return view('admin.pages.galleries', compact('galleries'));
    }
}
