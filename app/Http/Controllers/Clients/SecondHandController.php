<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SecondHandController extends Controller
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

    public function getArticle()
    {
        return Article::with('firstImage', 'user')->get();
    }

    public function returnBlade()
    {
        // dùng lại ở các blade này
        $categories = $this->getCategories();
        $leftBanner = $this->getLeftBanner();
        $rightBanner = $this->getRightBanner();
        $topBanner = $this->getTopBanner();
        $countItem = $this->getCartItem();
        //

        $articles = $this->getArticle();

        return view('clients.pages.secondHand', compact('categories', 'leftBanner', 'rightBanner', 'topBanner', 'countItem', 'articles'));
    }
}
