<?php

namespace Database\Seeders;

use App\Models\Notification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Notification::create([
            'user_id' => 2,
            'message' => 'Đơn hàng #1001 của bạn đã được xác nhận.',
            'is_read' => 0,
            'link' => '/orders/1001',
            'type' => 'order',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Notification::create([
            'user_id' => 2,
            'message' => 'Bạn có một sản phẩm mới trong giỏ hàng.',
            'is_read' => 1,
            'link' => '/cart',
            'type' => 'cart',
            'created_at' => now()->subDays(1),
            'updated_at' => now()->subDays(1),
        ]);

        Notification::create([
            'user_id' => 3,
            'message' => 'Có 3 khuyến mãi hot dành cho bạn hôm nay.',
            'is_read' => 0,
            'link' => '/promotions',
            'type' => 'promotion',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Notification::create([
            'user_id' => 3,
            'message' => 'Sản phẩm bạn yêu thích đã giảm giá 10%.',
            'is_read' => 0,
            'link' => '/products/1',
            'type' => 'product',
            'created_at' => now()->subHours(3),
            'updated_at' => now()->subHours(3),
        ]);

        Notification::create([
            'user_id' => 2,
            'message' => 'Bài viết mới: “Top 5 laptop gaming 2025 đáng mua”.',
            'is_read' => 1,
            'link' => '/articles/3',
            'type' => 'article',
            'created_at' => now()->subDays(2),
            'updated_at' => now()->subDays(2),
        ]);

        Notification::create([
            'user_id' => 3,
            'message' => 'Tài khoản của bạn đã được cập nhật thông tin thành công.',
            'is_read' => 0,
            'link' => '/profile',
            'type' => 'account',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
