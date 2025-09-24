<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\CartItem;
use App\Models\Coupon;
use App\Models\Gallery;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\OrderItemDetail;
use App\Models\Payment;
use App\Models\Product;
use App\Models\ProductSerial;
use App\Models\ShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class CheckoutController extends Controller
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

    // 3 anh em nhà thêm xóa sửa :))
    public function addToCartItem(Request $request)
    {
        $productId = $request->product_id;
        $product = Product::find($productId);

        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Sản phẩm không tồn tại.'
            ]);
        }
        $cartItem = CartItem::where('user_id', Auth::id())
            ->where('product_id', $productId)
            ->first();

        $currentQuantityInCart = $cartItem ? $cartItem->number : 0;
        if ($currentQuantityInCart + 1 > $product->quantity) {
            return response()->json([
                'success' => false,
                'message' => 'Sản phẩm đã hết hàng hoặc vượt quá số lượng tồn kho.'
            ]);
        }
        if ($cartItem) {
            $cartItem->number += 1;
            $cartItem->save();
        } else {
            CartItem::create([
                'user_id' => Auth::id(),
                'product_id' => $productId,
                'number' => 1,
            ]);
        }

        return response()->json([
            'success' => true,
            'cart_count' => $this->getCartItem(),
            'message' => 'Đã thêm sản phẩm vào giỏ thành công!'
        ]);
    }


    public function removeFromCartItem(Request $request, $id)
    {
        $userId = Auth::id();
        $cartItem = CartItem::where('id', $id)
            ->where('user_id', $userId)
            ->first();
        $checkFlag = 0;
        if ($cartItem) {
            if ($request->coupon_code) {
                $couponProduct = Coupon::where('product_id', $cartItem->product_id)->find();
                if ($couponProduct)
                    $checkFlag = 1;
            }
            $cartItem->delete();
            return response()->json(['success' => true, 'checkFlag' => $checkFlag, 'count' => $this->getCartItem()]);
        }

        return response()->json(['success' => false], 404);
    }

    public function updateNumberInCartItem(Request $request)
    {
        $quantity = $request->input('quantities', []);
        if (empty($quantity)) {
            return redirect()->back()->with('toastr', [
                'type' => 'error',
                'message' => 'Bạn muốn mua không khí ở cửa hàng của chúng tôi à?'
            ]);
        }
        $cartItems = CartItem::whereIn('id', array_keys($quantity))
            ->where('user_id', Auth::id())
            ->with('product')
            ->get();

        foreach ($cartItems as $cartItem) {
            $productNumber = $quantity[$cartItem->id] ?? $cartItem->number;
            $cartItem->number = min($productNumber, $cartItem->product->quantity);
            $cartItem->save();
        }
        if ($request->coupon_code)
            session(['couponProduct' => $request->coupon_code]);
        session(['checkout_step' => 1]);
        return redirect()->route('checkout.step2');
    }

    private function noCacheView($view, $data = [], $additionalData = [])
    {
        $mergedData = array_merge($data, $additionalData);
        return response()
            ->view($view, $mergedData)
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
            ->header('Pragma', 'no-cache');
    }

    private function shareCheckoutData()
    {
        return [
            'categories' => $this->getCategories(),
            'leftBanner' => $this->getLeftBanner(),
            'rightBanner' => $this->getRightBanner(),
            'countItem'  => $this->getCartItem(),
            'topBanner' => $this->getTopBanner(),
        ];
    }

    public function getProductInCartItem()
    {
        return CartItem::where('user_id', Auth::id())->with('product.primaryImage')->get();
    }

    public function checkCoupon(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon_code)->first();
        if ($coupon && $coupon->status === 'valid') {
            $cartItem = CartItem::where('user_id', Auth::id())->where('product_id', $coupon->product_id)->first();
            if ($cartItem) {
                return response()->json([
                    'success' => true,
                    'code' => $coupon->code,
                    'discount' => $coupon->value,
                    'message' => 'Áp dụng thành công!'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Không có sản phẩm phù hợp với mã giảm giá!'
                ]);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Mã không tồn tại hoặc đã hết hạn!'
            ]);
        }
    }

    public function getShippingAddress()
    {
        return ShippingAddress::where('user_id', Auth::id())->get();
    }

    public function getTotalPriceOrder()
    {
        $discount = 0;
        if (session('couponProduct')) {
            $code = session('couponProduct');
            $coupon = Coupon::where('code', $code)->first();
            if ($coupon->status === 'valid') {
                $discount = $coupon->value;
                session(['couponProduct' => $coupon->id]);
            }
        }
        $cartItem = CartItem::where('user_id', Auth::id())->with('product')->get();
        $total = $cartItem->sum(function ($item) {
            return $item->number * $item->product->price;
        });
        return [
            'total' => $total + 50000 - $discount,
            'discount' => $discount
        ];
    }

    public function addToShippingAddress(Request $request)
    {
        if ($request->shipping_option === 'saved') {
            $shipping_id = $request->saved_address;
            session(['shippingAddressOrder' => $shipping_id]);
        } else {
            $validator = FacadesValidator::make($request->all(), [
                'name_new' => 'required|string|max:255|min:3',
                'phone_new' => ['required', 'string', 'max:12', 'regex:/^(0[1-9]\d{8}|\+84[1-9]\d{8})$/'],
                'city' => 'required',
                'district' => 'required',
                'ward' => 'required',
                'street' => 'required|string',
            ], [
                'name_new.required' => 'Tên không được để trống',
                'phone_new.regex' => 'Số phải đúng định dạng (Gợi ý nè: 0123456789 hoặc +84123456789)',
                'phone_new.required' => 'Số điện thoại không được để trống',
                'city.required' => 'Tỉnh/Thành phố không được để trống',
                'district.required' => 'Quận/Huyện không được để trống',
                'ward.required' => 'Xã/Phường không được để trống',
                'street.required' => 'Số nhà, tên đường không được để trống'
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput()
                    ->with('toastr_errors', $validator->errors()->all());
            }

            $address = $request->address;
            $name = $request->name_new;
            $phone = $request->phone_new;
            $newShippingAddress = ShippingAddress::create([
                'user_id' => Auth::id(),
                'address' => $address,
                'phone' => $phone,
                'name' => $name
            ]);
            session(['shippingAddressOrder' => $newShippingAddress->id]);
        }

        $cartItems = $this->getProductInCartItem();

        $total = $this->getTotalPriceOrder();

        $couponCode = session('couponProduct') ? session('couponProduct') : null;

        try {
            $order = Order::create([
                'user_id'             => Auth::id(),
                'total_price'         => $total['total'],
                'coupon_id'           => $couponCode,
                'status'              => 'creating',
                'shipping_address_id' => session('shippingAddressOrder'),
                'expired_at'          => now()->addMinutes(15),
            ]);

            session([
                'order_id'      => $order->id,
                'time_is_money' => $order->expired_at,
                'rum' => $total
            ]);

            $cartItems = CartItem::where('user_id', Auth::id())
                ->with('product')
                ->get();

            foreach ($cartItems as $item) {
                $orderItem = OrderItem::create([
                    'product_id'  => $item->product_id,
                    'quantity'    => $item->number,
                    'total_price' => $item->product->price * $item->number,
                    'order_id'    => $order->id,
                ]);

                if ($item->product->category->hasSerial) {
                    $serials = ProductSerial::where('product_id', $item->product_id)
                        ->where('status', 'in_stock')
                        ->limit($item->number)
                        ->get(['id', 'serial_number']);

                    if ($serials->count() !== $item->number) {
                        throw new \Exception("Không đủ hàng cho sản phẩm ID {$item->product_id}.");
                    }

                    $orderItemDetailsData = $serials->map(function ($serial) use ($orderItem) {
                        return [
                            'product_serial_id' => $serial->id,
                            'order_item_id'     => $orderItem->id,
                            'created_at'        => now(),
                            'updated_at'        => now(),
                        ];
                    })->all();

                    OrderItemDetail::insert($orderItemDetailsData);

                    ProductSerial::whereIn('id', $serials->pluck('id'))
                        ->update(['status' => 'ordered']);

                    $quantity = ProductSerial::where('product_id', $item->product_id)
                        ->where('status', 'in_stock')
                        ->count();

                    $item->product->update([
                        'quantity' => $quantity,
                        'status'   => $quantity > 0 ? 'in_stock' : 'out_stock',
                    ]);

                    $usedSerials = session()->get('reserved_serials', []);
                    $usedSerials = array_merge($usedSerials, $serials->pluck('id')->toArray());
                    session()->put('reserved_serials', $usedSerials);
                } else {
                    $newQuantity = max(0, $item->product->quantity - $item->number);

                    $item->product->update([
                        'quantity' => $newQuantity,
                        'status'   => $newQuantity > 0 ? 'in_stock' : 'out_stock',
                    ]);
                }
            }
        } catch (\Exception $e) {
            return redirect()->route('checkout.step1')->with('error', $e->getMessage());
        }

        CartItem::where('user_id', Auth::id())->delete();
        session(['checkout_step' => 2]);
        return redirect()->route('checkout.step3');
    }

    public function getShippingAddressToCreateOrder()
    {
        if (session('shippingAddressOrder')) {
            $id = session('shippingAddressOrder');
            return ShippingAddress::findOrFail($id);
        }
        return;
    }

    public function confirmOrder(Request $request)
    {
        $payment = $request->input('payment');

        if (!in_array($payment, ['cash', 'paypal'])) {
            return back()->with('error', 'Phương thức thanh toán không hợp lệ!');
        }

        if ($payment !== 'cash' && !$request->filled('transaction_id')) {
            return back()->with('error', 'Vui lòng quét QR để thanh toán!');
        }

        $id_order = session('order_id');
        $order = Order::findOrFail($id_order);

        if ($payment === 'cash') {
            $pay = Payment::create([
                'order_id' => $order->id,
                'method' => $payment,
                'amount' => $order->total_price,
                'status' => 'pending',
            ]);
        } else {
            $pay = Payment::create([
                'order_id' => $order->id,
                'method' => $payment,
                'amount' => $order->total_price,
                'status' => 'complete',
                'transaction_id' => $request->input('transaction_id'),
                'paid_at' => now()
            ]);
        }

        $order->update(['status' => 'pending']);

        session(['checkout_step' => 3]);
        return redirect()->route('checkout.step4');
    }

    public function returnBladeStep1()
    {
        $currentStep = session('checkout_step', 0);

        if ($currentStep >= 1) {
            session(['checkout_step' => 0]);
        }

        session(['checkout_step' => 0]);

        session()->forget(['couponProduct', 'shippingAddressOrder', 'order_id', 'reserved_serials']);

        $cartItems = $this->getProductInCartItem();

        foreach ($cartItems as $item) {
            if ($item->product->quantity <= 0) {
                $item->delete();
            }
        }

        return $this->noCacheView('clients.pages.checkout_step1', $this->shareCheckoutData(), [
            'cartItems' => $this->getProductInCartItem()
        ]);
    }

    public function returnBladeStep2()
    {
        $currentStep = session('checkout_step', 0);
        if ($currentStep >= 2) {
            session(['checkout_step' => 1]);
        }
        if (session('checkout_step', 0) < 1) {
            return redirect()->route('checkout.step1');
        }

        return $this->noCacheView('clients.pages.checkout_step2', $this->shareCheckoutData(), [
            'shippingAddresses' => $this->getShippingAddress()
        ]);
    }

    public function returnBladeStep3()
    {
        if (session('checkout_step', 0) == 0) {
            return redirect()->route('checkout.step1');
        } else if (session('checkout_step', 0) == 1) {
            return redirect()->route('checkout.step2');
        }

        $total = session('rum');
        $order = Order::where('id', session('order_id'))->with('orderItems.product')->first();

        if ($order) {
            return $this->noCacheView('clients.pages.checkout_step3', $this->shareCheckoutData(), [
                'address' => $this->getShippingAddressToCreateOrder(),
                'orderItems' => $order->orderItems,
                'totalPrice' => $total
            ]);
        } else {
            session()->forget([
                'couponProduct',
                'shippingAddressOrder',
                'order_id',
                'reserved_serials',
                'rum'
            ]);
            return redirect()->route('checkout.step1')->with('error', 'Đơn hàng đã bị hủy!');
        }
    }

    public function returnBladeStep4()
    {
        if (session('checkout_step', 0) == 0) {
            return redirect()->route('home');
        } else if (session('checkout_step', 0) == 1) {
            return redirect()->route('checkout.step2');
        } else if (session('checkout_step', 0) == 2) {
            return redirect()->route('checkout.step3');
        }

        session()->forget([
            'checkout_step',
            'couponProduct',
            'shippingAddressOrder',
            'order_id',
            'reserved_serials',
            'rum'
        ]);

        return $this->noCacheView('clients.pages.checkout_step4', $this->shareCheckoutData());
    }
}
