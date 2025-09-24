<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\CartItem;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Product;

class SingleProductController extends Controller
{
    // dùng lại ở các blade nè
    public function getCategories()
    {
        return Category::with(['children' => function ($query) {
            $query->withCount('products');
        }])
            ->withCount('products')
            ->get();
    }

    public function getLeftBanner()
    {
        return Gallery::where('type', 'left_banner')
            ->where('is_active', 1)
            ->orderBy('display_order', 'desc')
            ->first();
    }

    public function getRightBanner()
    {
        return Gallery::where('type', 'right_banner')
            ->where('is_active', 1)
            ->orderBy('display_order', 'desc')
            ->first();
    }

    public function getCartItem()
    {
        if (Auth::check())
            return CartItem::where('user_id', Auth::id())->sum('number');
        else
            return 0;
    }

    public function getTopBanner()
    {
        return Gallery::where('type', 'top_banner')
            ->where('is_active', 1)
            ->orderBy('display_order', 'desc')
            ->first();
    }
    //

    public function getBreadcrumb($id) {}

    public function getThisProduct($id)
    {
        return Product::with('attributes', 'productImages', 'reviews.user', 'category')->findOrFail($id);
    }

    public function getOutlineProduct($id)
    {
        $product = Product::with('category')->findOrFail($id);
        $category = $product->category;
        return $category->products()
            ->where('outline', 1)
            ->where('id', '!=', $id)
            ->get();
    }

    public function getArticles()
    {
        return Article::where('type', 0)->with(['firstImage'])->limit(12)->get();
    }

    public function getBanner()
    {
        return Gallery::where('type', 'banner')->inRandomOrder()->first();
    }

    public function returnBlade($slug, $id)
    {
        $id = (int) $id;

        // dùng lại ở các blade này
        $categories = $this->getCategories();
        $leftBanner = $this->getLeftBanner();
        $rightBanner = $this->getRightBanner();
        $topBanner = $this->getTopBanner();
        $countItem = $this->getCartItem();
        //

        $product = $this->getThisProduct($id);

        $outlineProducts = $this->getOutlineProduct($id);

        $articles = $this->getArticles();

        $gallery = $this->getBanner();

        return view('clients.pages.single_product', compact('slug', 'id', 'categories', 'leftBanner', 'rightBanner', 'topBanner', 'product', 'outlineProducts', 'articles', 'gallery', 'countItem'));
    }
}
