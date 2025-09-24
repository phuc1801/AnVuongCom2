<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function getArticleInfor()
    {
        return Article::with('firstImage')
            ->where('type', 0)
            ->latest()
            ->take(8)
            ->get();
    }

    public function getArticleDiscount()
    {
        return Article::with('firstImage')
            ->where('type', 1)
            ->latest()
            ->take(4)
            ->get();
    }

    public function getSlideProducts()
    {
        // Lấy các danh mục cha có show_in_slide = 1, cùng với danh mục con và sản phẩm
        $cates = Category::where('show_in_slide', 1)
            ->whereNull('parent_id')
            ->with('children.products')
            ->get();

        // Tạo mảng slideProduct với danh mục và sản phẩm
        $slideProduct = $cates->map(function ($cate) {
            $products = collect();

            // Nếu có category con, lấy sản phẩm từ các category con
            if ($cate->children->isNotEmpty()) {
                $products = $cate->children->flatMap(function ($child) {
                    return $child->products()->where('outline', 1)->get();
                });
            } else {
                // Nếu không có category con, lấy sản phẩm từ chính category
                $products = $cate->products()->where('outline', 1)->get();
            }

            // Xáo trộn ngẫu nhiên và lấy 10 sản phẩm cho mỗi category
            $products = $products->shuffle()->take(10);

            return [
                'category' => $cate,
                'products' => $products
            ];
        })->filter(function ($item) {
            return $item['products']->isNotEmpty(); // Chỉ giữ danh mục có sản phẩm
        });

        return $slideProduct;
    }

    public function getTopSelling()
    {
        return Product::select(
            'products.id',
            'products.name',
            'products.price',
            'products.real_price',
            'products.category_id',
            'products.rating_avg',
            'products.rating_count',
            'products.slug',
            DB::raw('SUM(order_items.quantity) as total_sold')
        )
            ->join('order_items', 'products.id', '=', 'order_items.product_id')
            ->join('orders', 'orders.id', '=', 'order_items.order_id')
            ->where('orders.status', 'completed')
            ->groupBy(
                'products.id',
                'products.name',
                'products.price',
                'products.real_price',
                'products.category_id',
                'products.rating_avg',
                'products.rating_count',
                'products.slug'
            )
            ->orderByDesc('total_sold')
            ->limit(10)
            ->get();
    }

    public function getGallerySlides()
    {
        return Gallery::where('type', 'slide')
            ->where('is_active', 1)
            ->orderBy('display_order', 'desc')
            ->get();
    }

    public function getGalleryImages()
    {
        return Gallery::where('type', 'image_around_slide')
            ->where('is_active', 1)
            ->orderBy('display_order', 'desc')
            ->limit(5)
            ->get();
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
        $slides = $this->getGallerySlides();

        $imageAround = $this->getGalleryImages();

        $categoryProducts = $this->getSlideProducts();

        $topSell = $this->getTopSelling();

        $articleInfor = $this->getArticleInfor();

        $articleDisco = $this->getArticleDiscount();

        return view('clients/pages/home', compact('categories', 'leftBanner', 'rightBanner', 'topBanner', 'countItem', 'slides', 'imageAround', 'categoryProducts', 'topSell', 'articleInfor', 'articleDisco'));
    }
}
