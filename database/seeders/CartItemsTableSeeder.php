<?php

namespace Database\Seeders;

use App\Models\CartItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User 1
        CartItem::create([
            'user_id' => 1,
            'product_id' => 1,
            'number' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        CartItem::create([
            'user_id' => 1,
            'product_id' => 3,
            'number' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // User 2
        CartItem::create([
            'user_id' => 2,
            'product_id' => 2,
            'number' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        CartItem::create([
            'user_id' => 2,
            'product_id' => 5,
            'number' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // User 3
        CartItem::create([
            'user_id' => 3,
            'product_id' => 4,
            'number' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        CartItem::create([
            'user_id' => 3,
            'product_id' => 6,
            'number' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // User 4
        CartItem::create([
            'user_id' => 4,
            'product_id' => 1,
            'number' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        CartItem::create([
            'user_id' => 4,
            'product_id' => 2,
            'number' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // User 5
        CartItem::create([
            'user_id' => 5,
            'product_id' => 3,
            'number' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        CartItem::create([
            'user_id' => 5,
            'product_id' => 5,
            'number' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
