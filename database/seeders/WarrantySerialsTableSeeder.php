<?php

namespace Database\Seeders;

use App\Models\WarrantySerial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarrantySerialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WarrantySerial::create([
            'order_item_id' => 4,
            'product_serial_id' => 13,
            'start_at' => now(),
            'end_at' => now()->addYear(),
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        WarrantySerial::create([
            'order_item_id' => 5,
            'product_serial_id' => 15,
            'start_at' => now(),
            'end_at' => now()->addYear(),
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }
}
