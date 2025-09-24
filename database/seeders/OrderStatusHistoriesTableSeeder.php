<?php

namespace Database\Seeders;

use App\Models\OrderStatusHistory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderStatusHistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Order #1: pending
        OrderStatusHistory::create(['order_id' => 1,'status' => 'creating','note' => 'Đơn hàng đã được tạo']);
        OrderStatusHistory::create(['order_id' => 1,'status' => 'pending','note' => 'Đơn hàng đang chờ xác nhận']);

        // Order #2: processing
        OrderStatusHistory::create(['order_id' => 2,'status' => 'creating','note' => 'Đơn hàng đã được tạo']);
        OrderStatusHistory::create(['order_id' => 2, 'status' => 'pending', 'note' => 'Đơn hàng đang chờ xác nhận']);
        OrderStatusHistory::create(['order_id' => 2, 'status' => 'processing', 'note' => 'Đơn hàng đang được xử lý']);

        // Order #3: shipping
        OrderStatusHistory::create(['order_id' => 3,'status' => 'creating','note' => 'Đơn hàng đã được tạo']);
        OrderStatusHistory::create(['order_id' => 3, 'status' => 'pending', 'note' => 'Đơn hàng đang chờ xác nhận']);
        OrderStatusHistory::create(['order_id' => 3, 'status' => 'processing', 'note' => 'Đơn hàng đang được xử lý']);
        OrderStatusHistory::create(['order_id' => 3, 'status' => 'shipping', 'note' => 'Đơn hàng đã bàn giao cho đơn vị vận chuyển']);

        // Order #4: completed
        OrderStatusHistory::create(['order_id' => 4,'status' => 'creating','note' => 'Đơn hàng đã được tạo']);
        OrderStatusHistory::create(['order_id' => 4, 'status' => 'pending', 'note' => 'Đơn hàng đang chờ xác nhận']);
        OrderStatusHistory::create(['order_id' => 4, 'status' => 'processing', 'note' => 'Đơn hàng đang được xử lý']);
        OrderStatusHistory::create(['order_id' => 4, 'status' => 'shipping', 'note' => 'Đơn hàng đang giao']);
        OrderStatusHistory::create(['order_id' => 4, 'status' => 'completed', 'note' => 'Khách hàng đã nhận hàng']);

        // Order #5: completed
        OrderStatusHistory::create(['order_id' => 5,'status' => 'creating','note' => 'Đơn hàng đã được tạo']);
        OrderStatusHistory::create(['order_id' => 5, 'status' => 'pending', 'note' => 'Đơn hàng đang chờ xác nhận']);
        OrderStatusHistory::create(['order_id' => 5, 'status' => 'processing', 'note' => 'Đơn hàng đang được xử lý']);
        OrderStatusHistory::create(['order_id' => 5, 'status' => 'shipping', 'note' => 'Đơn hàng đang giao']);
        OrderStatusHistory::create(['order_id' => 5, 'status' => 'completed', 'note' => 'Khách hàng đã nhận hàng']);

    }
}
