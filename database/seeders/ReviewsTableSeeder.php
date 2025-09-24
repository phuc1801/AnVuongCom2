<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // User 4 đánh giá sản phẩm 4
        Review::create([
            'user_id' => 2,
            'product_id' => 4,
            'rating' => '3',
            'comment' => 'Ổn trong tầm giá, tuy nhiên hơi nóng khi sử dụng lâu.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // User 5 đánh giá sản phẩm 5
        Review::create([
            'user_id' => 3,
            'product_id' => 5,
            'rating' => '4',
            'comment' => 'Máy gọn nhẹ, phù hợp cho sinh viên, hơi ít cổng kết nối.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
