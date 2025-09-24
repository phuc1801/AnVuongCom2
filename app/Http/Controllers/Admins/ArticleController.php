<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ArticleController extends Controller
{

    public function addNewArticle(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'required|in:true,false',
        ]);

        $id = Auth::guard('admin')->id();

        $article = Article::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'type' => $request->boolean('type'),
            'user_id' => $id,
        ]);

        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $index => $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $path = 'img/articles/' . $imageName;
                $resizedImage = Image::make($image)->orientate()->resize(600, 600)->encode();
                Storage::disk('public')->put($path, $resizedImage);

                ArticleImage::create([
                    'article_id' => $article->id,
                    'image' => $imageName,
                ]);
            }
        }

        return redirect()->route('admin.article-add')->with('success', 'Danh mục đã thêm thành công!');
    }

    public function updateOldArticle(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'type' => 'required|in:true,false',
        ]);
        try {
            $article = Article::findOrFail($request->article_id);
            if (!$article) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy bài viết phù hợp!'
                ]);
            } else {
                $article->title = $request->title;
                $article->content = $request->content;
                $article->type = $request->boolean('type');
                $article->save();
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

    public function deleteOldArticle(Request $request)
    {
        try {
            $article = Article::findOrFail($request->article_id);
            if (!$article) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy bài viết phù hợp!'
                ]);
            } else {
                $images = ArticleImage::where('article_id', $article->id)->get();
                foreach ($images as $image)
                    Storage::disk('public')->delete('img/articles/' . $image->image);
                $article->delete();
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

    public function showFormArticle()
    {
        return view('admin.pages.article_add');
    }

    public function returnBlade()
    {
        $articles = Article::with('user')->get();
        return view('admin.pages.articles', compact('articles'));
    }
}
