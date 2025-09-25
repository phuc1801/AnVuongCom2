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
    public function getListArticle(){
        return Article::with('user')->get();
    }
    public function returnBlade(){
        $articles = $this->getListArticle();
        return view('admin.pages.articles', compact('articles'));
    }

    public function addNewArticle(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required|min:3|max:255',
            'type' => 'required|in:true,false'
        ], [
            'title.required' => 'Khong duoc de trong tieu de',
            'content.required' => 'Khong duoc de trong content',
            'type.required' => 'Khong duoc de trong'
        ]);
        $id = Auth::guard('admin')->id();
        $articles = Article::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'type' => $request->boolean('type'),
            'user_id' => $id
        ]);

        if($request->hasFile('images')){
            $images = [];
            foreach($request->file('images') as $index => $image){
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $path = 'img/articles/' . $imageName;
                $resizedImage = Image::make($image)->orientate()->resize(600, 600)->encode();
                Storage::disk('public')->put($path, $resizedImage);
                ArticleImage::create([
                    'article_id' => $articles->id,
                    'image' => $imageName
                ]);
            }
        }
        return redirect()->route('admin.article-add')->with('success', 'Them thanh cong');
    }

    public function updateOldArticle(Request $request){
        try{
            $article = Article::findOrFail($request->article_id);
            if(!$article){
                return response()->json([
                    'success' => false,
                    'message' => 'Khong tim thay ban ghi'
                ]);
            }
            $article->title = $request->title;
            $article->content = $request->content;
            $article->type = $request->boolean('type');
            $article->save();
            return response()->json([
                'success' => true,
                'message' => 'Sua thanh cong'
            ]);
        }catch(\Throwable $th){
            return response()->json([
                'success' => false,
                'message' => 'Loi try Catch'
            ]);
        }
    }

    public function deleteOldArticle(Request $request){
        try{
            $article = Article::findOrFail($request->article_id);
            if(!$article){
                return response()->json([
                    'success' => false,
                    'message' => 'Ban ghi khong ton'
                ]);
            }
            $images = ArticleImage::where('article_id', $article->id)->get();
            foreach($images as $image){
                Storage::disk('public')->delete('img/articles/' . $image->image);
            }
            $article->delete();
            return response()->json([
                'success' => true,
                'message' => 'Xoa thanh cong'
            ]);

        }catch(\Throwable $th){
            return response()->json([
                    'success' => false,
                    'message' => 'loi try catch'
            ]);
        }
    }



    public function showFormArticle(){
        return view('admin.pages.article_add');
    }

    public function returnTest(){
        $articles = $this->getListArticle();
        return view('admin.pages.test', compact('articles'));
    }

    public function showAddTest(){
        return view('admin.pages.test_add');
    }
}