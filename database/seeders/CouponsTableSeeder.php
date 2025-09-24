<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coupon::create([
            'name' => 'Giảm 100k Laptop',
            'expiry_date' => now()->addMonths(1),
            'status' => 'valid',
            'value' => 100000,
            'code' => 'LAPTOP100',
            'product_id' => 1, // Laptop
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Coupon::create([
            'name' => 'Giảm 50k PC Gaming',
            'expiry_date' => now()->addMonths(2),
            'status' => 'valid',
            'value' => 50000,
            'code' => 'PC50OFF',
            'product_id' => 2, // PC Gaming
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
