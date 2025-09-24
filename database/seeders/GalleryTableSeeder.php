<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gallery::create([
            'name' => 'Chào hè',
            'type' => 'slide',
            'is_active' => true,
            'display_order' => 1,
            'image' => 'slide1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => 'Ưu đãi',
            'type' => 'slide',
            'is_active' => true,
            'display_order' => 1,
            'image' => 'slide2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => 'Sửa chữa',
            'type' => 'slide',
            'is_active' => true,
            'display_order' => 1,
            'image' => 'slide3.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => '',
            'type' => 'image_around_slide',
            'is_active' => true,
            'display_order' => 5,
            'image' => 'anhtinh2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => '',
            'type' => 'image_around_slide',
            'is_active' => true,
            'display_order' => 4,
            'image' => 'anhtinh3.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => '',
            'type' => 'image_around_slide',
            'is_active' => true,
            'display_order' => 3,
            'image' => 'anhtinh4.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => '',
            'type' => 'image_around_slide',
            'is_active' => true,
            'display_order' => 2,
            'image' => 'anhtinh5.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => '',
            'type' => 'image_around_slide',
            'is_active' => true,
            'display_order' => 1,
            'image' => 'anhtinh1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => 'tai nghe',
            'type' => 'banner',
            'is_active' => true,
            'display_order' => 1,
            'image' => 'banner1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => 'poseidon',
            'type' => 'banner',
            'is_active' => true,
            'display_order' => 2,
            'image' => 'banner2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => 'deal xịn',
            'type' => 'banner',
            'is_active' => true,
            'display_order' => 3,
            'image' => 'banner3.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => 'lap khỏe',
            'type' => 'banner',
            'is_active' => true,
            'display_order' => 1,
            'image' => 'banner4.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => 'bộ công thương',
            'type' => 'footer',
            'is_active' => true,
            'display_order' => 1,
            'image' => 'bct.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => 'dmca',
            'type' => 'footer',
            'is_active' => true,
            'display_order' => 2,
            'image' => 'dmca.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => 'ems',
            'type' => 'footer',
            'is_active' => true,
            'display_order' => 3,
            'image' => 'ems.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => 'ghn',
            'type' => 'footer',
            'is_active' => true,
            'display_order' => 4,
            'image' => 'ghn.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => 'ghtk',
            'type' => 'footer',
            'is_active' => true,
            'display_order' => 5,
            'image' => 'ghtk.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Gallery::create([
            'name' => 'left',
            'type' => 'left_banner',
            'is_active' => true,
            'display_order' => 1,
            'image' => 'left_banner1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => 'left',
            'type' => 'left_banner',
            'is_active' => true,
            'display_order' => 2,
            'image' => 'left_banner2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => 'left',
            'type' => 'left_banner',
            'is_active' => false,
            'display_order' => 3,
            'image' => 'left_banner3.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => 'logo',
            'type' => 'logo',
            'is_active' => true,
            'display_order' => 1,
            'image' => 'image.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => 'logo',
            'type' => 'logo',
            'is_active' => true,
            'display_order' => 2,
            'image' => 'anvuonglogo.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => 'right',
            'type' => 'right_banner',
            'is_active' => true,
            'display_order' => 1,
            'image' => 'right_banner1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => 'right',
            'type' => 'right_banner',
            'is_active' => true,
            'display_order' => 2,
            'image' => 'right_banner2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => 'top',
            'type' => 'top_banner',
            'is_active' => true,
            'display_order' => 1,
            'image' => 'top_banner1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Gallery::create([
            'name' => 'top',
            'type' => 'top_banner',
            'is_active' => true,
            'display_order' => 2,
            'image' => 'top_banner2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
