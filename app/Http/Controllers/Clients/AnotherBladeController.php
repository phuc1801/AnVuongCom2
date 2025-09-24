<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Support\Facades\Auth;

class AnotherBladeController extends Controller
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

    public function returnBlade()
    {
        // dùng lại ở các blade này
        $categories = $this->getCategories();
        $leftBanner = $this->getLeftBanner();
        $rightBanner = $this->getRightBanner();
        $topBanner = $this->getTopBanner();
        $countItem = $this->getCartItem();
        //
        return view('clients.small_pages.contact_with', compact('categories', 'leftBanner', 'rightBanner', 'topBanner', 'countItem'));
    }

    public function returnAbout()
    {
        // dùng lại ở các blade này
        $categories = $this->getCategories();
        $leftBanner = $this->getLeftBanner();
        $rightBanner = $this->getRightBanner();
        $topBanner = $this->getTopBanner();
        $countItem = $this->getCartItem();
        //
        return view('clients.small_pages.about', compact('categories', 'leftBanner', 'rightBanner', 'topBanner', 'countItem'));
    }

    public function returnEInvoice()
    {
        // dùng lại ở các blade này
        $categories = $this->getCategories();
        $leftBanner = $this->getLeftBanner();
        $rightBanner = $this->getRightBanner();
        $topBanner = $this->getTopBanner();
        $countItem = $this->getCartItem();
        //
        return view('clients.small_pages.e_invoice', compact('categories', 'leftBanner', 'rightBanner', 'topBanner', 'countItem'));
    }

    public function returnGuideInstallment()
    {
        // dùng lại ở các blade này
        $categories = $this->getCategories();
        $leftBanner = $this->getLeftBanner();
        $rightBanner = $this->getRightBanner();
        $topBanner = $this->getTopBanner();
        $countItem = $this->getCartItem();
        //
        return view('clients.small_pages.guide_installment', compact('categories', 'leftBanner', 'rightBanner', 'topBanner', 'countItem'));
    }

    public function returnGuideOrder()
    {
        // dùng lại ở các blade này
        $categories = $this->getCategories();
        $leftBanner = $this->getLeftBanner();
        $rightBanner = $this->getRightBanner();
        $topBanner = $this->getTopBanner();
        $countItem = $this->getCartItem();
        //
        return view('clients.small_pages.guide_order', compact('categories', 'leftBanner', 'rightBanner', 'topBanner', 'countItem'));
    }

    public function returnGuidePayment()
    {
        // dùng lại ở các blade này
        $categories = $this->getCategories();
        $leftBanner = $this->getLeftBanner();
        $rightBanner = $this->getRightBanner();
        $topBanner = $this->getTopBanner();
        $countItem = $this->getCartItem();
        //
        return view('clients.small_pages.guide_payment', compact('categories', 'leftBanner', 'rightBanner', 'topBanner', 'countItem'));
    }

    public function returnPolicyPrivacy()
    {
        // dùng lại ở các blade này
        $categories = $this->getCategories();
        $leftBanner = $this->getLeftBanner();
        $rightBanner = $this->getRightBanner();
        $topBanner = $this->getTopBanner();
        $countItem = $this->getCartItem();
        //
        return view('clients.small_pages.policy_privacy', compact('categories', 'leftBanner', 'rightBanner', 'topBanner', 'countItem'));
    }

    public function returnPolicyReturn()
    {
        // dùng lại ở các blade này
        $categories = $this->getCategories();
        $leftBanner = $this->getLeftBanner();
        $rightBanner = $this->getRightBanner();
        $topBanner = $this->getTopBanner();
        $countItem = $this->getCartItem();
        //
        return view('clients.small_pages.policy_return', compact('categories', 'leftBanner', 'rightBanner', 'topBanner', 'countItem'));
    }

    public function returnPolicyShipping()
    {
        // dùng lại ở các blade này
        $categories = $this->getCategories();
        $leftBanner = $this->getLeftBanner();
        $rightBanner = $this->getRightBanner();
        $topBanner = $this->getTopBanner();
        $countItem = $this->getCartItem();
        //
        return view('clients.small_pages.policy_shipping', compact('categories', 'leftBanner', 'rightBanner', 'topBanner', 'countItem'));
    }

    public function returnPolicyWarranty()
    {
        // dùng lại ở các blade này
        $categories = $this->getCategories();
        $leftBanner = $this->getLeftBanner();
        $rightBanner = $this->getRightBanner();
        $topBanner = $this->getTopBanner();
        $countItem = $this->getCartItem();
        //
        return view('clients.small_pages.policy_warranty', compact('categories', 'leftBanner', 'rightBanner', 'topBanner', 'countItem'));
    }
}
