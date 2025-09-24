<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Payment::create([
            'order_id'       => 1,
            'method'         => 'cash',
            'transaction_id' => null,
            'amount'         => 18550000,
            'status'         => 'pending',
            'created_at'     => now(),
            'updated_at'     => now(),
        ]);

        Payment::create([
            'order_id'       => 2,
            'method'         => 'paypal',
            'transaction_id' => 'PP-9F4A7C2B1D8E6H0J',
            'amount'         => 20950000,
            'status'         => 'complete',
            'paid_at'        => now()->subDays(2),
            'created_at'     => now(),
            'updated_at'     => now(),
        ]);

        Payment::create([
            'order_id'       => 3,
            'method'         => 'cash',
            'transaction_id' => null,
            'amount'         => 35850000,
            'status'         => 'pending',
            'created_at'     => now(),
            'updated_at'     => now(),
        ]);

        Payment::create([
            'order_id'       => 4,
            'method'         => 'paypal',
            'transaction_id' => 'PP-3K8M5T1R6V2X9Z4Q',
            'amount'         => 46950000,
            'status'         => 'complete',
            'paid_at'        => now(),
            'created_at'     => now(),
            'updated_at'     => now(),
        ]);

        Payment::create([
            'order_id'       => 5,
            'method'         => 'paypal',
            'transaction_id' => 'PP-B7D2F9H4L0N3P6S1',
            'amount'         => 15950000,
            'status'         => 'complete',
            'paid_at'        => now(),
            'created_at'     => now(),
            'updated_at'     => now(),
        ]);
    }
}
