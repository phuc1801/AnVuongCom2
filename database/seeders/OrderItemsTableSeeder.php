<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderItem::create([
            'order_id' => 1,
            'product_id' => 1,
            'quantity' => 1,
            'total_price' => 18500000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        OrderItem::create([
            'order_id' => 2,
            'product_id' => 2,
            'quantity' => 1,
            'total_price' => 20900000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        OrderItem::create([
            'order_id' => 3,
            'product_id' => 3,
            'quantity' => 2,
            'total_price' => 35800000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        OrderItem::create([
            'order_id' => 4,
            'product_id' => 4,
            'quantity' => 1,
            'total_price' => 46900000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        OrderItem::create([
            'order_id' => 5,
            'product_id' => 5,
            'quantity' => 1,
            'total_price' => 15900000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
