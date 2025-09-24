<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([ //1
            'user_id' => 2,
            'total_price' => 18550000,
            'status' => 'pending',
            'requestDestroy' => 0,
            'shipping_address_id' => 1,
            'expired_at' => now()->addMinutes(15),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Order::create([ //2
            'user_id' => 3,
            'total_price' => 20950000,
            'status' => 'processing',
            'requestDestroy' => 0,
            'shipping_address_id' => 2,
            'expired_at' => now()->addMinutes(15),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Order::create([ //3
            'user_id' => 2,
            'total_price' => 35850000,
            'status' => 'shipping',
            'requestDestroy' => 0,
            'shipping_address_id' => 3,
            'expired_at' => now()->addMinutes(15),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Order::create([ //4
            'user_id' => 2,
            'total_price' => 46950000,
            'status' => 'completed',
            'requestDestroy' => 0,
            'shipping_address_id' => 5,
            'expired_at' => now()->addMinutes(15),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Order::create([ //5
            'user_id' => 3,
            'total_price' => 15950000,
            'status' => 'completed',
            'requestDestroy' => 0,
            'shipping_address_id' => 4,
            'expired_at' => now()->addMinutes(15),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
