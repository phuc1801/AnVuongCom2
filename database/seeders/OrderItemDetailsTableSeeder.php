<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderItemDetail;

class OrderItemDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderItemDetail::create([
            'order_item_id' => 1,
            'product_serial_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        OrderItemDetail::create([
            'order_item_id' => 2,
            'product_serial_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        OrderItemDetail::create([
            'order_item_id' => 3,
            'product_serial_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        OrderItemDetail::create([
            'order_item_id' => 3,
            'product_serial_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        OrderItemDetail::create([
            'order_item_id' => 4,
            'product_serial_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        OrderItemDetail::create([
            'order_item_id' => 5,
            'product_serial_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
