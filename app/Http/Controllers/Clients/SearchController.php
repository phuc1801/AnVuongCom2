<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
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

    public function search(Request $request)
    {
        // dùng lại ở các blade này
        $categories = $this->getCategories();
        $leftBanner = $this->getLeftBanner();
        $rightBanner = $this->getRightBanner();
        $topBanner = $this->getTopBanner();
        $countItem = $this->getCartItem();
        //

        $keyword = trim($request->input('q', ''));

        $productsQuery = Product::query();

        if ($keyword !== '') {
            $tokens = preg_split('/\s+/', $keyword);

            $productsQuery->where(function ($query) use ($tokens) {
                foreach ($tokens as $token) {
                    $query->where(function ($q) use ($token) {
                        $q->where('name', 'LIKE', "%{$token}%")
                            ->orWhere('description', 'LIKE', "%{$token}%")
                            ->orWhereHas('attributes', function ($q2) use ($token) {
                                $q2->where('value', 'LIKE', "%{$token}%");
                            });
                    });
                }
            });
        }

        $products = $productsQuery->paginate(12)->withQueryString();
        return view('clients.pages.searchItem', compact('categories', 'leftBanner', 'rightBanner', 'topBanner', 'countItem', 'products', 'keyword'));
    }
}
