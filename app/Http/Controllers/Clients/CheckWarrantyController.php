<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\ProductSerial;
use App\Models\WarrantySerial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class CheckWarrantyController extends Controller
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

    public function checkWarranty(Request $request)
    {

        // Verify reCAPTCHA
        $captchaResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('captcha.secret'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        $captchaResult = $captchaResponse->json();
        if (empty($captchaResult['success']) || !$captchaResult['success']) {
            return response()->json([
                'success' => false,
                'message' => 'Xác minh captcha thất bại, vui lòng thử lại.'
            ]);
        }

        $productSerial = ProductSerial::where('serial_number', $request->serial_number)->with([
            'orderItemDetail.orderItem.product',
            'warrantySerial'
        ])->first();

        if (!$productSerial) {
            return response()->json([
                'success' => false,
                'message' => 'Không tìm thấy thông tin bảo hành cho Serial Number này!'
            ]);
        }

        if ($productSerial->warrantySerial->status === 'ended') {
            return response()->json([
                'success' => true,
                'message' => 'Sản phẩm hợp lệ',
                'data' => [
                    'product_name' => $productSerial->orderItemDetail->orderItem->product->name,
                    'is_valid' => 0,
                    'end_at' => $productSerial->warrantySerial->end_at
                ]
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Sản phẩm hợp lệ',
            'data' => [
                'product_name' => $productSerial->orderItemDetail->orderItem->product->name,
                'is_valid' => 1,
                'end_at' => $productSerial->warrantySerial->end_at
            ]
        ]);
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


        return view('clients.small_pages.searchWarranty', compact('categories', 'leftBanner', 'rightBanner', 'topBanner', 'countItem'));
    }
}
