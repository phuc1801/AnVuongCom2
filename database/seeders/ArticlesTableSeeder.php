<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title' => 'Xu hướng laptop 2025: Hiệu năng mạnh mẽ, thiết kế siêu mỏng',
            'content' => 'Các dòng laptop năm 2025 tập trung vào hiệu năng cao, thời lượng pin dài và thiết kế mỏng nhẹ, hướng đến sự tiện lợi cho cả công việc lẫn giải trí.',
            'type' => 0,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Article::create([
            'title' => 'Top 5 PC gaming đáng mua nhất hiện nay',
            'content' => 'Danh sách PC gaming từ phân khúc tầm trung đến cao cấp, đáp ứng tốt nhu cầu chơi game AAA.',
            'type' => 0,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Article::create([
            'title' => 'So sánh Intel Core i9 vs AMD Ryzen 9: Đâu là lựa chọn tốt hơn?',
            'content' => 'Bài viết phân tích chi tiết hiệu năng, giá thành và tính năng của Intel Core i9 và AMD Ryzen 9.',
            'type' => 0,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Article::create([
            'title' => 'Mẹo tối ưu hiệu năng laptop cho sinh viên',
            'content' => 'Các bước giúp laptop hoạt động mượt mà hơn, tiết kiệm pin và tăng tuổi thọ thiết bị.',
            'type' => 0,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Article::create([
            'title' => 'Hướng dẫn chọn màn hình máy tính cho designer',
            'content' => 'Các yếu tố cần quan tâm: độ phân giải, tần số quét, độ phủ màu và giá thành.',
            'type' => 0,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Article::create([
            'title' => 'PC văn phòng giá rẻ – Giải pháp tối ưu cho doanh nghiệp',
            'content' => 'Cấu hình đề xuất phù hợp cho các công ty vừa và nhỏ, tiết kiệm chi phí nhưng vẫn đảm bảo hiệu năng.',
            'type' => 0,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Article::create([
            'title' => 'Laptop gaming dưới 20 triệu: Có nên mua?',
            'content' => 'Phân tích ưu, nhược điểm và các mẫu laptop gaming phổ biến trong tầm giá 20 triệu đồng.',
            'type' => 0,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Article::create([
            'title' => 'Ổ cứng SSD NVMe có gì khác biệt so với SSD SATA?',
            'content' => 'Bài viết giải thích sự khác biệt về tốc độ, giá thành và ứng dụng thực tế của SSD NVMe.',
            'type' => 0,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Article::create([
            'title' => 'Cách bảo dưỡng PC để luôn bền bỉ',
            'content' => 'Những thói quen cần có khi sử dụng PC: vệ sinh định kỳ, quản lý nhiệt độ và cập nhật driver.',
            'type' => 0,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Article::create([
            'title' => 'Tương lai của AI trong ngành công nghệ phần cứng',
            'content' => 'AI không chỉ hiện diện trong phần mềm mà còn được tích hợp vào phần cứng để tối ưu hiệu năng.',
            'type' => 0,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        Article::create([
            'title' => 'Deal xịn',
            'content' => 'Phân tích ưu, nhược điểm và các mẫu laptop gaming phổ biến trong tầm giá 20 triệu đồng.',
            'type' => 1,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Article::create([
            'title' => 'Lap khỏe',
            'content' => 'Bài viết giải thích sự khác biệt về tốc độ, giá thành và ứng dụng thực tế của SSD NVMe.',
            'type' => 1,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Article::create([
            'title' => 'Thu cũ',
            'content' => 'Những thói quen cần có khi sử dụng PC: vệ sinh định kỳ, quản lý nhiệt độ và cập nhật driver.',
            'type' => 1,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Article::create([
            'title' => 'Microsoft 365',
            'content' => 'AI không chỉ hiện diện trong phần mềm mà còn được tích hợp vào phần cứng để tối ưu hiệu năng.',
            'type' => 1,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
