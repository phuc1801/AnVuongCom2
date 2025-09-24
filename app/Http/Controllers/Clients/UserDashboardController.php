<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\OrderStatusHistory;
use App\Models\Product;
use App\Models\Review;
use App\Models\ShippingAddress;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserDashboardController extends Controller
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
    public function getUser()
    {
        return User::with('shippingAddresses')->findOrFail(Auth::id());
    }

    public function updateUserInfo(Request $request)
    {
        $user = User::findOrFail(Auth::id());

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:15',
        ], [
            'name.required' => 'Tên không được để trống',
        ]);

        $birthday = null;
        if ($request->dob_day && $request->dob_month && $request->dob_year) {
            $birthday = sprintf(
                "%04d-%02d-%02d",
                $request->dob_year,
                $request->dob_month,
                $request->dob_day
            );
        }

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->birthday = $birthday;
        $user->save();

        return redirect()->back()->with('success', 'Cập nhật thông tin thành công!');
    }

    public function updateShippingAddress(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:15',
            'address' => 'required|string'
        ], [
            'name.required' => 'Tên không được để trống',
            'address.required' => 'Vui lòng chọn đầy đủ địa chỉ'
        ]);

        ShippingAddress::create([
            'user_id' => Auth::id(),
            'address' => $request->address,
            'name' => $request->name,
            'phone' => $request->phone
        ]);
        return redirect()->back()->with('success', 'Cập nhật địa chỉ thành công!');
    }

    public function getOrderStatus()
    {
        $orders = Order::where('user_id', Auth::id())->with('orderItems.product')
            ->get();

        $groupedOrders = $orders->groupBy('status');

        $groupedOrders['all'] = $orders;

        $statuses = ['pending', 'completed', 'cancelled', 'shipping', 'processing'];
        foreach ($statuses as $status) {
            if (!isset($groupedOrders[$status])) {
                $groupedOrders[$status] = collect();
            }
        }
        return $groupedOrders;
    }

    public function updateOrderStatusHistory(Request $request)
    {
        OrderStatusHistory::create([
            'order_id' => $request->order_id,
            'status' => 'cancel_request',
            'changed_at' => now(),
            'note' => $request->reason,
        ]);
        $order = Order::findOrFail($request->order_id);
        $order->requestDestroy = 1;
        $order->save();

        return response()->json([
            'success' => true,
        ]);
    }

    public function submitReview(Request $request)
    {
        $orderItem = OrderItem::findOrFail($request->order_item);
        $product = Product::findOrFail($request->product_id);
        Review::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'rating' => $request->rating_star,
            'comment' => $request->comment,
        ]);

        $orderItem->is_rating = 1;
        $orderItem->save();

        return response()->json([
            'success' => true,
        ]);
    }

    public function changePassword(Request $request)
    {
        $request->validate(
            [
                'current_password' => 'required',
                'password' => 'required|string|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).+$/|min:8'
            ],
            [
                'password.regex' => 'Mật khẩu phải có ít nhất 8 kí tự, 1 chữ hoa, 1 chữ thường, 1 số và 1 ký tự đặc biệt (@$!%*?&).',
                'password.confirmed' => 'Mật khẩu nhập lại không khớp',
            ]
        );
        $user_id = Auth::id();
        $user = User::findOrFail($user_id);

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Mật khẩu hiện tại không đúng!']);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('okela', 'Đổi mật khẩu thành công!');
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

        $user = $this->getUser();

        $groupeOrders = $this->getOrderStatus();

        return view('clients/pages/userDash', compact('categories', 'leftBanner', 'rightBanner', 'topBanner', 'countItem', 'user', 'groupeOrders'));
    }
}
