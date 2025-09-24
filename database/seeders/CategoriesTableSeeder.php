<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Laptop',
            'slug' => 'laptop',
            'description' => 'Danh mục Laptop',
            'parent_id' => null,
            'icon' => 'fa-solid fa-laptop',
            'show_in_slide' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'PC',
            'slug' => 'pc',
            'description' => 'Danh mục PC',
            'parent_id' => null,
            'icon' => 'fa-solid fa-desktop',
            'show_in_slide' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Linh kiện laptop',
            'slug' => 'linh-kien-laptop',
            'description' => 'Danh mục linh kiện laptop',
            'parent_id' => null,
            'icon' => 'fa-solid fa-gear',
            'hasSerial' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Linh kiện PC',
            'slug' => 'linh-kien-pc',
            'description' => 'Danh mục linh kiện PC',
            'parent_id' => null,
            'icon' => 'fa-solid fa-wrench',
            'hasSerial' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Phím chuột',
            'slug' => 'phim-chuot',
            'description' => 'Danh mục phím, chuột',
            'parent_id' => null,
            'icon' => 'fa-solid fa-computer-mouse',
            'show_in_slide' => 1,
            'hasSerial' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Camera',
            'slug' => 'camera',
            'description' => 'Danh mục camera',
            'parent_id' => null,
            'icon' => 'fa-solid fa-camera-retro',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Máy in, POS',
            'slug' => 'may-in-pos',
            'description' => 'Danh mục máy in',
            'parent_id' => null,
            'hasSerial' => 0,
            'icon' => 'fa-solid fa-print',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Phần mềm, mạng',
            'slug' => 'phan-mem-mang',
            'description' => 'Danh mục phần mềm và thiết bị mạng',
            'parent_id' => null,
            'icon' => 'fa-solid fa-wifi',
            'hasSerial' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Loa - Tai nghe',
            'slug' => 'loa-tai-nghe',
            'description' => 'Danh mục loa và tai nghe',
            'parent_id' => null,
            'icon' => 'fa-solid fa-headphones',
            'show_in_slide' => 1,
            'hasSerial' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Phụ kiện khác',
            'slug' => 'phu-kien-khac',
            'description' => 'Danh mục phụ kiện khác',
            'parent_id' => null,
            'icon' => 'fa-solid fa-toolbox',
            'hasSerial' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Sạc',
            'slug' => 'sac-laptop',
            'description' => 'Sạc laptop',
            'parent_id' => 3,
            'icon' => 'fa-solid fa-bolt',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Bàn phím Laptop',
            'slug' => 'ban-phim-laptop',
            'description' => 'Bàn phím laptop',
            'parent_id' => 3,
            'icon' => 'fa-solid fa-keyboard',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Ổ cứng',
            'slug' => 'o-cung',
            'description' => 'Ổ cứng',
            'parent_id' => 3,
            'icon' => 'fa-solid fa-hard-drive',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Ram Laptop',
            'slug' => 'ram-laptop',
            'description' => 'Ram laptop',
            'parent_id' => 3,
            'icon' => 'fa-solid fa-memory',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Màn hình Laptop',
            'slug' => 'man-hinh-laptop',
            'description' => 'Màn hình laptop',
            'parent_id' => 3,
            'icon' => 'fa-solid fa-desktop',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Nguồn',
            'slug' => 'nguon-pc',
            'description' => 'Nguồn máy tính PC',
            'parent_id' => 4,
            'icon' => 'fa-solid fa-plug',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Case',
            'slug' => 'case-pc',
            'description' => 'Case máy tính PC',
            'parent_id' => 4,
            'icon' => 'fa-solid fa-box',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Mainbroad',
            'slug' => 'mainboard-pc',
            'description' => 'Mainboard PC',
            'parent_id' => 4,
            'icon' => 'fa-solid fa-microchip',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'CPU',
            'slug' => 'cpu-pc',
            'description' => 'CPU PC',
            'parent_id' => 4,
            'icon' => 'fa-solid fa-microchip',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Ram PC',
            'slug' => 'ram-pc',
            'description' => 'Ram PC',
            'parent_id' => 4,
            'icon' => 'fa-solid fa-memory',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Fan tản nhiệt',
            'slug' => 'fan-tan-nhiet',
            'description' => 'Quạt tản nhiệt PC',
            'parent_id' => 4,
            'icon' => 'fa-solid fa-fan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'VGA - Card màn hình',
            'slug' => 'vga-card-man-hinh',
            'description' => 'Card màn hình rời cho PC',
            'parent_id' => 4,
            'icon' => 'fa-solid fa-photo-film',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Màn hình PC',
            'slug' => 'man-hinh-pc',
            'description' => 'Màn hình PC',
            'parent_id' => 4,
            'icon' => 'fa-solid fa-desktop',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Bàn phím',
            'slug' => 'ban-phim',
            'description' => 'Bàn phím máy tính',
            'parent_id' => 5,
            'icon' => 'fa-solid fa-keyboard',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Chuột',
            'slug' => 'chuot',
            'description' => 'Chuột máy tính',
            'parent_id' => 5,
            'icon' => 'fa-solid fa-computer-mouse',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Webcam',
            'slug' => 'webcam',
            'description' => 'Webcam máy tính',
            'parent_id' => 6,
            'icon' => 'fa-solid fa-video',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Camera giám sát',
            'slug' => 'camera-giam-sat',
            'description' => 'Camera giám sát an ninh',
            'parent_id' => 6,
            'icon' => 'fa-solid fa-video-camera',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Đầu ghi hình',
            'slug' => 'dau-ghi-hinh',
            'description' => 'Đầu ghi hình camera',
            'parent_id' => 6,
            'icon' => 'fa-solid fa-hdd',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Ổ cứng - Thẻ nhớ Camera',
            'slug' => 'o-cung-the-nho-camera',
            'description' => 'Ổ cứng, thẻ nhớ cho camera',
            'parent_id' => 6,
            'icon' => 'fa-solid fa-sd-card',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Máy in',
            'slug' => 'may-in',
            'description' => 'Máy in',
            'parent_id' => 7,
            'icon' => 'fa-solid fa-print',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Máy POS',
            'slug' => 'may-pos',
            'description' => 'Máy POS',
            'parent_id' => 7,
            'icon' => 'fa-solid fa-cash-register',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Phần mềm',
            'slug' => 'phan-mem',
            'description' => 'Phần mềm bản quyền',
            'parent_id' => 8,
            'icon' => 'fa-solid fa-code',
            'hasSerial' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Thiết bị mạng',
            'slug' => 'thiet-bi-mang',
            'description' => 'Router, Switch, Modem',
            'parent_id' => 8,
            'icon' => 'fa-solid fa-network-wired',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Loa',
            'slug' => 'loa',
            'description' => 'Loa máy tính',
            'parent_id' => 9,
            'icon' => 'fa-solid fa-speaker',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Tai nghe',
            'slug' => 'tai-nghe',
            'description' => 'Tai nghe máy tính',
            'parent_id' => 9,
            'icon' => 'fa-solid fa-headphones',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'USB - Ổ cứng di động',
            'slug' => 'usb-o-cung-di-dong',
            'description' => 'USB, ổ cứng di động',
            'parent_id' => 10,
            'icon' => 'fa-solid fa-usb',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Thẻ nhớ',
            'slug' => 'the-nho',
            'description' => 'Thẻ nhớ cho máy ảnh, điện thoại',
            'parent_id' => 10,
            'icon' => 'fa-solid fa-sd-card',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Dây cáp',
            'slug' => 'day-cap',
            'description' => 'Cáp sạc, cáp HDMI, cáp mạng',
            'parent_id' => 10,
            'icon' => 'fa-solid fa-plug',
            'hasSerial' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Balo - Túi chống sốc',
            'slug' => 'balo-tui-chong-soc',
            'description' => 'Balo, túi chống sốc laptop',
            'parent_id' => 10,
            'icon' => 'fa-solid fa-bag-shopping',
            'hasSerial' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Giá đỡ Laptop',
            'slug' => 'gia-do-laptop',
            'description' => 'Đế tản nhiệt, giá đỡ laptop',
            'parent_id' => 10,
            'icon' => 'fa-solid fa-laptop',
            'hasSerial' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => 'Bộ vệ sinh máy tính',
            'slug' => 'bo-ve-sinh-may-tinh',
            'description' => 'Dung dịch vệ sinh, chổi lau',
            'parent_id' => 10,
            'icon' => 'fa-solid fa-spray-can',
            'hasSerial' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
