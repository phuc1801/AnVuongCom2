<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function returnBlade()
    {
        $users = User::where('role_id', 2)->latest()->get();
        $categories = Category::withCount('products')->whereHas('products')
            ->orderByDesc('products_count')
            ->take(5)
            ->get();
        $products = Product::where('status', 'in_stock')->get();
        $orders = Order::with('shippingAddress')->latest()->limit(3)->get();
        $totalSum = Order::where('status', 'completed')->sum('total_price');

        // 3 em bán chạy nhất
        $best_selling = Product::select(
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
            ->limit(3)
            ->get();

        $moneyRevenue = Order::select(
            DB::raw("SUM(total_price) AS revenue"),
            DB::raw("DATE_FORMAT(created_at, '%Y-%m') AS month")
        )
            ->groupBy('month')
            ->orderBy('month', 'ASC')
            ->get();

        return view('admin.pages.admin_dash', compact('users', 'products', 'orders', 'totalSum', 'categories', 'best_selling', 'moneyRevenue'));
    }
}
