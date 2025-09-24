<?php

namespace Database\Seeders;

use App\Models\CategoryAttribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryAttributeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryAttribute::create(['attribute_id' => 1, 'category_id' => 1, 'is_filter' => 1, 'icon' => 'fa-solid fa-microchip']); // CPU - Laptop
        CategoryAttribute::create(['attribute_id' => 2, 'category_id' => 1, 'is_filter' => 1, 'icon' => 'fa-solid fa-memory']); // RAM - Laptop
        CategoryAttribute::create(['attribute_id' => 3, 'category_id' => 1, 'is_filter' => 1, 'icon' => 'fa-solid fa-hdd']); // Ổ cứng - Laptop
        CategoryAttribute::create(['attribute_id' => 4, 'category_id' => 1, 'is_filter' => 1, 'icon' => 'fa-solid fa-desktop']); // Màn hình - Laptop
        CategoryAttribute::create(['attribute_id' => 5, 'category_id' => 1, 'is_filter' => 1, 'icon' => 'fa-solid fa-video']); // Card đồ họa - Laptop
        CategoryAttribute::create(['attribute_id' => 6, 'category_id' => 1, 'is_filter' => 0, 'icon' => 'fa-solid fa-battery-full']); // Pin - Laptop
        CategoryAttribute::create(['attribute_id' => 7, 'category_id' => 1, 'is_filter' => 0, 'icon' => 'fa-solid fa-windows']); // Hệ điều hành - Laptop
        CategoryAttribute::create(['attribute_id' => 8, 'category_id' => 1, 'is_filter' => 0, 'icon' => 'fa-solid fa-weight']); // Khối lượng - Laptop
        CategoryAttribute::create(['attribute_id' => 73, 'category_id' => 1, 'is_filter' => 0, 'icon' => 'fa-solid fa-plug']); // Cổng kết nối Laptop - Laptop (Cổng kết nối Laptop là attribute thứ 69)
        CategoryAttribute::create(['attribute_id' => 74, 'category_id' => 1, 'is_filter' => 0, 'icon' => 'fa-solid fa-camera']); // Webcam tích hợp - Laptop (Webcam tích hợp là attribute thứ 70)
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 1, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 1, 'category_id' => 2, 'is_filter' => 1, 'icon' => 'fa-solid fa-microchip']); // CPU - PC
        CategoryAttribute::create(['attribute_id' => 2, 'category_id' => 2, 'is_filter' => 1, 'icon' => 'fa-solid fa-memory']); // RAM - PC
        CategoryAttribute::create(['attribute_id' => 3, 'category_id' => 2, 'is_filter' => 1, 'icon' => 'fa-solid fa-hdd']); // Ổ cứng - PC
        CategoryAttribute::create(['attribute_id' => 5, 'category_id' => 2, 'is_filter' => 1, 'icon' => 'fa-solid fa-video']); // Card đồ họa - PC
        CategoryAttribute::create(['attribute_id' => 9, 'category_id' => 2, 'is_filter' => 1, 'icon' => 'fa-solid fa-motherboard']); // Mainboard - PC
        CategoryAttribute::create(['attribute_id' => 10, 'category_id' => 2, 'is_filter' => 0, 'icon' => 'fa-solid fa-plug-circle-bolt']); // PSU - PC
        CategoryAttribute::create(['attribute_id' => 11, 'category_id' => 2, 'is_filter' => 0, 'icon' => 'fa-solid fa-box']); // Case - PC
        CategoryAttribute::create(['attribute_id' => 75, 'category_id' => 2, 'is_filter' => 0, 'icon' => 'fa-solid fa-ruler-combined']); // Kích thước thùng máy - PC (Kích thước thùng máy là attribute thứ 70)
        CategoryAttribute::create(['attribute_id' => 76, 'category_id' => 2, 'is_filter' => 0, 'icon' => 'fa-solid fa-tools']); // Khả năng nâng cấp - PC (Khả năng nâng cấp là attribute thứ 71)
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 2, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất


        CategoryAttribute::create(['attribute_id' => 12, 'category_id' => 11, 'is_filter' => 1, 'icon' => 'fa-solid fa-bolt']); // Công suất - Sạc
        CategoryAttribute::create(['attribute_id' => 13, 'category_id' => 11, 'is_filter' => 1, 'icon' => 'fa-solid fa-plug']); // Điện áp - Sạc
        CategoryAttribute::create(['attribute_id' => 14, 'category_id' => 11, 'is_filter' => 1, 'icon' => 'fa-solid fa-bolt-lightning']); // Dòng điện - Sạc
        CategoryAttribute::create(['attribute_id' => 67, 'category_id' => 11, 'is_filter' => 1, 'icon' => 'fa-solid fa-plug-circle-bolt']); // Chuẩn cổng kết nối - Sạc
        CategoryAttribute::create(['attribute_id' => 77, 'category_id' => 11, 'is_filter' => 1, 'icon' => 'fa-solid fa-plug']); // Loại chân cắm - Sạc (Loại chân cắm là attribute thứ 72)
        CategoryAttribute::create(['attribute_id' => 78, 'category_id' => 11, 'is_filter' => 0, 'icon' => 'fa-solid fa-ruler']); // Chiều dài dây sạc - Sạc (Chiều dài dây sạc là attribute thứ 73)
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 11, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 16, 'category_id' => 12, 'is_filter' => 1, 'icon' => 'fa-solid fa-keyboard']); // Loại bàn phím - Bàn phím Laptop
        CategoryAttribute::create(['attribute_id' => 17, 'category_id' => 12, 'is_filter' => 1, 'icon' => 'fa-solid fa-lightbulb']); // Đèn nền - Bàn phím Laptop
        CategoryAttribute::create(['attribute_id' => 18, 'category_id' => 12, 'is_filter' => 0, 'icon' => 'fa-solid fa-language']); // Ngôn ngữ layout - Bàn phím Laptop
        CategoryAttribute::create(['attribute_id' => 79, 'category_id' => 12, 'is_filter' => 0, 'icon' => 'fa-solid fa-hand-pointer']); // Touchpad - Bàn phím Laptop (Touchpad là attribute thứ 74)
        CategoryAttribute::create(['attribute_id' => 80, 'category_id' => 12, 'is_filter' => 0, 'icon' => 'fa-solid fa-calculator']); // Bàn phím số phụ - Bàn phím Laptop (Bàn phím số phụ là attribute thứ 75)
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 12, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 3, 'category_id' => 13, 'is_filter' => 1, 'icon' => 'fa-solid fa-hdd']); // Ổ cứng
        CategoryAttribute::create(['attribute_id' => 19, 'category_id' => 13, 'is_filter' => 1, 'icon' => 'fa-solid fa-plug']); // Loại kết nối
        CategoryAttribute::create(['attribute_id' => 20, 'category_id' => 13, 'is_filter' => 1, 'icon' => 'fa-solid fa-hdd']); // Tốc độ đọc/ghi - Ổ cứng
        CategoryAttribute::create(['attribute_id' => 81, 'category_id' => 13, 'is_filter' => 1, 'icon' => 'fa-solid fa-hdd']); // Loại ổ (HDD/SSD) - Ổ cứng (Loại ổ là attribute thứ 76)
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 13, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 2, 'category_id' => 14, 'is_filter' => 1, 'icon' => 'fa-solid fa-memory']); // RAM - Laptop
        CategoryAttribute::create(['attribute_id' => 21, 'category_id' => 14, 'is_filter' => 1, 'icon' => 'fa-solid fa-memory']); // Loại RAM - RAM Laptop
        CategoryAttribute::create(['attribute_id' => 22, 'category_id' => 14, 'is_filter' => 1, 'icon' => 'fa-solid fa-tachometer-alt']); // Bus RAM - RAM Laptop
        CategoryAttribute::create(['attribute_id' => 82, 'category_id' => 14, 'is_filter' => 1, 'icon' => 'fa-solid fa-sliders']); // Số khe RAM Laptop hỗ trợ - RAM Laptop (Số khe RAM Laptop hỗ trợ là attribute thứ 77)
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 14, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 23, 'category_id' => 15, 'is_filter' => 1, 'icon' => 'fa-solid fa-ruler']); // Kích thước - Màn hình Laptop (Kích thước là attribute thứ 23)
        CategoryAttribute::create(['attribute_id' => 24, 'category_id' => 15, 'is_filter' => 1, 'icon' => 'fa-solid fa-desktop']); // Độ phân giải - Màn hình Laptop (Độ phân giải là attribute thứ 24)
        CategoryAttribute::create(['attribute_id' => 25, 'category_id' => 15, 'is_filter' => 1, 'icon' => 'fa-solid fa-tv']); // Tấm nền - Màn hình Laptop (Tấm nền là attribute thứ 25)
        CategoryAttribute::create(['attribute_id' => 26, 'category_id' => 15, 'is_filter' => 1, 'icon' => 'fa-solid fa-sync']); // Tần số quét - Màn hình Laptop (Tần số quét là attribute thứ 26)
        CategoryAttribute::create(['attribute_id' => 83, 'category_id' => 15, 'is_filter' => 0, 'icon' => 'fa-solid fa-lightbulb']); // Độ sáng - Màn hình Laptop (Độ sáng là attribute thứ 78)
        CategoryAttribute::create(['attribute_id' => 84, 'category_id' => 15, 'is_filter' => 0, 'icon' => 'fa-solid fa-hand-point-up']); // Khả năng cảm ứng - Màn hình Laptop (Khả năng cảm ứng là attribute thứ 79)
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 15, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 10, 'category_id' => 16, 'is_filter' => 0, 'icon' => 'fa-solid fa-plug-circle-bolt']); // PSU
        CategoryAttribute::create(['attribute_id' => 12, 'category_id' => 16, 'is_filter' => 1, 'icon' => 'fa-solid fa-bolt']); // Công suất - Nguồn
        CategoryAttribute::create(['attribute_id' => 27, 'category_id' => 16, 'is_filter' => 1, 'icon' => 'fa-solid fa-shield-alt']); // Chuẩn hiệu suất - Nguồn
        CategoryAttribute::create(['attribute_id' => 28, 'category_id' => 16, 'is_filter' => 0, 'icon' => 'fa-solid fa-plug-circle-bolt']); // Số đầu cấp nguồn - Nguồn
        CategoryAttribute::create(['attribute_id' => 85, 'category_id' => 16, 'is_filter' => 0, 'icon' => 'fa-solid fa-shield']); // Chuẩn bảo vệ an toàn - Nguồn
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 16, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 11, 'category_id' => 17, 'is_filter' => 0, 'icon' => 'fa-solid fa-box']); // Case
        CategoryAttribute::create(['attribute_id' => 23, 'category_id' => 17, 'is_filter' => 1, 'icon' => 'fa-solid fa-ruler']); // Kích thước
        CategoryAttribute::create(['attribute_id' => 29, 'category_id' => 17, 'is_filter' => 1, 'icon' => 'fa-solid fa-box']); // Chất liệu - Case
        CategoryAttribute::create(['attribute_id' => 30, 'category_id' => 17, 'is_filter' => 1, 'icon' => 'fa-solid fa-motherboard']); // Hỗ trợ mainboard - Case
        CategoryAttribute::create(['attribute_id' => 86, 'category_id' => 17, 'is_filter' => 0, 'icon' => 'fa-solid fa-fan']); // Số quạt tích hợp - Case
        CategoryAttribute::create(['attribute_id' => 87, 'category_id' => 17, 'is_filter' => 0, 'icon' => 'fa-solid fa-plug']); // Cổng I/O mặt trước - Case
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 17, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 9, 'category_id' => 18, 'is_filter' => 1, 'icon' => 'fa-solid fa-motherboard']); // Mainboard - PC
        CategoryAttribute::create(['attribute_id' => 31, 'category_id' => 18, 'is_filter' => 1, 'icon' => 'fa-solid fa-microchip']); // Socket - Mainboard
        CategoryAttribute::create(['attribute_id' => 32, 'category_id' => 18, 'is_filter' => 1, 'icon' => 'fa-solid fa-memory']); // Chipset - Mainboard
        CategoryAttribute::create(['attribute_id' => 33, 'category_id' => 18, 'is_filter' => 1, 'icon' => 'fa-solid fa-sliders']); // Khe RAM - Mainboard
        CategoryAttribute::create(['attribute_id' => 34, 'category_id' => 18, 'is_filter' => 0, 'icon' => 'fa-solid fa-plug']); // Cổng kết nối - Mainboard
        CategoryAttribute::create(['attribute_id' => 88, 'category_id' => 18, 'is_filter' => 0, 'icon' => 'fa-solid fa-video']); // Hỗ trợ đa GPU - Mainboard
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 18, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 1, 'category_id' => 19, 'is_filter' => 1, 'icon' => 'fa-solid fa-microchip']); // CPU
        CategoryAttribute::create(['attribute_id' => 35, 'category_id' => 19, 'is_filter' => 1, 'icon' => 'fa-solid fa-microchip']); // Số nhân - CPU
        CategoryAttribute::create(['attribute_id' => 36, 'category_id' => 19, 'is_filter' => 1, 'icon' => 'fa-solid fa-microchip']); // Số luồng - CPU
        CategoryAttribute::create(['attribute_id' => 37, 'category_id' => 19, 'is_filter' => 1, 'icon' => 'fa-solid fa-tachometer-alt']); // Xung nhịp - CPU
        CategoryAttribute::create(['attribute_id' => 38, 'category_id' => 19, 'is_filter' => 1, 'icon' => 'fa-solid fa-memory']); // Bộ nhớ đệm - CPU
        CategoryAttribute::create(['attribute_id' => 89, 'category_id' => 19, 'is_filter' => 1, 'icon' => 'fa-solid fa-microchip']); // Loại CPU - CPU
        CategoryAttribute::create(['attribute_id' => 90, 'category_id' => 19, 'is_filter' => 0, 'icon' => 'fa-solid fa-industry']); // Tiến trình sản xuất - CPU
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 19, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 2, 'category_id' => 20, 'is_filter' => 1, 'icon' => 'fa-solid fa-memory']); // RAM - PC
        CategoryAttribute::create(['attribute_id' => 21, 'category_id' => 20, 'is_filter' => 1, 'icon' => 'fa-solid fa-memory']); // Loại RAM - RAM PC
        CategoryAttribute::create(['attribute_id' => 22, 'category_id' => 20, 'is_filter' => 1, 'icon' => 'fa-solid fa-tachometer-alt']); // Bus RAM - RAM PC
        CategoryAttribute::create(['attribute_id' => 91, 'category_id' => 20, 'is_filter' => 0, 'icon' => 'fa-solid fa-sliders']); // Hỗ trợ XMP/EXPO - RAM PC
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 20, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 39, 'category_id' => 21, 'is_filter' => 1, 'icon' => 'fa-solid fa-fan']); // Độ ồn - Fan tản nhiệt
        CategoryAttribute::create(['attribute_id' => 40, 'category_id' => 21, 'is_filter' => 1, 'icon' => 'fa-solid fa-tachometer-alt']); // Tốc độ quay - Fan tản nhiệt
        CategoryAttribute::create(['attribute_id' => 92, 'category_id' => 21, 'is_filter' => 1, 'icon' => 'fa-solid fa-fan']); // Loại tản nhiệt (Air/Liquid) - Fan tản nhiệt
        CategoryAttribute::create(['attribute_id' => 93, 'category_id' => 21, 'is_filter' => 0, 'icon' => 'fa-solid fa-lightbulb']); // LED RGB - Fan tản nhiệt
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 21, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 5, 'category_id' => 22, 'is_filter' => 1, 'icon' => 'fa-solid fa-video']); // Card đồ họa
        CategoryAttribute::create(['attribute_id' => 41, 'category_id' => 22, 'is_filter' => 1, 'icon' => 'fa-solid fa-memory']); // Dung lượng VRAM - VGA
        CategoryAttribute::create(['attribute_id' => 42, 'category_id' => 22, 'is_filter' => 1, 'icon' => 'fa-solid fa-memory']); // Loại bộ nhớ - VGA
        CategoryAttribute::create(['attribute_id' => 43, 'category_id' => 22, 'is_filter' => 1, 'icon' => 'fa-solid fa-plug']); // Cổng xuất hình - VGA
        CategoryAttribute::create(['attribute_id' => 44, 'category_id' => 22, 'is_filter' => 1, 'icon' => 'fa-solid fa-bolt']); // TDP - VGA
        CategoryAttribute::create(['attribute_id' => 94, 'category_id' => 22, 'is_filter' => 1, 'icon' => 'fa-solid fa-plug-circle-bolt']); // Chuẩn giao tiếp - VGA
        CategoryAttribute::create(['attribute_id' => 95, 'category_id' => 22, 'is_filter' => 0, 'icon' => 'fa-solid fa-ruler']); // Độ dài card - VGA
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 22, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 23, 'category_id' => 23, 'is_filter' => 1, 'icon' => 'fa-solid fa-ruler']); // Kích thước - Màn hình PC
        CategoryAttribute::create(['attribute_id' => 24, 'category_id' => 23, 'is_filter' => 1, 'icon' => 'fa-solid fa-desktop']); // Độ phân giải - Màn hình PC
        CategoryAttribute::create(['attribute_id' => 25, 'category_id' => 23, 'is_filter' => 1, 'icon' => 'fa-solid fa-tv']); // Tấm nền - Màn hình PC
        CategoryAttribute::create(['attribute_id' => 26, 'category_id' => 23, 'is_filter' => 1, 'icon' => 'fa-solid fa-sync']); // Tần số quét - Màn hình PC
        CategoryAttribute::create(['attribute_id' => 83, 'category_id' => 23, 'is_filter' => 0, 'icon' => 'fa-solid fa-lightbulb']); // Độ sáng - Màn hình PC
        CategoryAttribute::create(['attribute_id' => 96, 'category_id' => 23, 'is_filter' => 1, 'icon' => 'fa-solid fa-stopwatch']); // Thời gian phản hồi - Màn hình PC
        CategoryAttribute::create(['attribute_id' => 97, 'category_id' => 23, 'is_filter' => 0, 'icon' => 'fa-solid fa-arrows-rotate']); // Khả năng xoay dọc - Màn hình PC
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 23, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 16, 'category_id' => 24, 'is_filter' => 1, 'icon' => 'fa-solid fa-keyboard']); // Loại bàn phím - Bàn phím
        CategoryAttribute::create(['attribute_id' => 17, 'category_id' => 24, 'is_filter' => 1, 'icon' => 'fa-solid fa-lightbulb']); // Đèn nền - Bàn phím
        CategoryAttribute::create(['attribute_id' => 46, 'category_id' => 24, 'is_filter' => 1, 'icon' => 'fa-solid fa-sliders']); // Loại switch - Bàn phím
        CategoryAttribute::create(['attribute_id' => 98, 'category_id' => 24, 'is_filter' => 0, 'icon' => 'fa-solid fa-ban']); // Anti-ghosting - Bàn phím
        CategoryAttribute::create(['attribute_id' => 99, 'category_id' => 24, 'is_filter' => 0, 'icon' => 'fa-solid fa-code']); // Macro hỗ trợ - Bàn phím
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 24, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 45, 'category_id' => 25, 'is_filter' => 1, 'icon' => 'fa-solid fa-plug']); // Kiểu kết nối - Chuột (Chuẩn kết nối là attribute thứ 18)
        CategoryAttribute::create(['attribute_id' => 47, 'category_id' => 25, 'is_filter' => 1, 'icon' => 'fa-solid fa-crosshairs']); // Độ phân giải DPI - Chuột (Độ phân giải DPI là attribute thứ 20)
        CategoryAttribute::create(['attribute_id' => 48, 'category_id' => 25, 'is_filter' => 1, 'icon' => 'fa-solid fa-mouse']); // Số nút bấm - Chuột
        CategoryAttribute::create(['attribute_id' => 100, 'category_id' => 25, 'is_filter' => 0, 'icon' => 'fa-solid fa-lightbulb']); // LED RGB chuột - Chuột
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 25, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 24, 'category_id' => 26, 'is_filter' => 1, 'icon' => 'fa-solid fa-desktop']); // Độ phân giải - Webcam
        CategoryAttribute::create(['attribute_id' => 50, 'category_id' => 26, 'is_filter' => 1, 'icon' => 'fa-solid fa-microphone']); // Mic tích hợp - Webcam (Mic tích hợp là attribute thứ 23)
        CategoryAttribute::create(['attribute_id' => 101, 'category_id' => 26, 'is_filter' => 1, 'icon' => 'fa-solid fa-video']); // Tốc độ khung hình - Webcam
        CategoryAttribute::create(['attribute_id' => 102, 'category_id' => 26, 'is_filter' => 0, 'icon' => 'fa-solid fa-arrows-rotate']); // Khả năng xoay - Webcam
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 26, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 24, 'category_id' => 27, 'is_filter' => 1, 'icon' => 'fa-solid fa-desktop']); // Độ phân giải - Camera giám sát
        CategoryAttribute::create(['attribute_id' => 51, 'category_id' => 27, 'is_filter' => 0]); // Chuẩn nén
        CategoryAttribute::create(['attribute_id' => 52, 'category_id' => 27, 'is_filter' => 1, 'icon' => 'fa-solid fa-moon']); // Tầm nhìn ban đêm - Camera giám sát
        CategoryAttribute::create(['attribute_id' => 61, 'category_id' => 27, 'is_filter' => 0]); // Chuẩn wifi
        CategoryAttribute::create(['attribute_id' => 68, 'category_id' => 27, 'is_filter' => 0]); // Khả năng chống nước
        CategoryAttribute::create(['attribute_id' => 103, 'category_id' => 27, 'is_filter' => 1, 'icon' => 'fa-solid fa-shield-alt']); // Chuẩn IP - Camera giám sát
        CategoryAttribute::create(['attribute_id' => 104, 'category_id' => 27, 'is_filter' => 0, 'icon' => 'fa-solid fa-plug-circle-bolt']); // Hỗ trợ POE - Camera giám sát
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 27, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 53, 'category_id' => 28, 'is_filter' => 1, 'icon' => 'fa-solid fa-server']); // Số kênh - Đầu ghi hình
        CategoryAttribute::create(['attribute_id' => 54, 'category_id' => 28, 'is_filter' => 1, 'icon' => 'fa-solid fa-hdd']); // Dung lượng hỗ trợ tối đa - Đầu ghi hình
        CategoryAttribute::create(['attribute_id' => 51, 'category_id' => 28, 'is_filter' => 0]); // Chuẩn nén
        CategoryAttribute::create(['attribute_id' => 105, 'category_id' => 28, 'is_filter' => 1, 'icon' => 'fa-solid fa-video']); // Loại đầu ghi (DVR/NVR) - Đầu ghi hình
        CategoryAttribute::create(['attribute_id' => 62, 'category_id' => 28, 'is_filter' => 1, 'icon' => 'fa-solid fa-ethernet']); // Số cổng LAN - Thiết bị mạng
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 28, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 3, 'category_id' => 29, 'is_filter' => 1, 'icon' => 'fa-solid fa-hdd']); // Ổ cứng
        CategoryAttribute::create(['attribute_id' => 20, 'category_id' => 29, 'is_filter' => 1, 'icon' => 'fa-solid fa-hdd']); // Tốc độ đọc/ghi - Ổ cứng - Thẻ nhớ Camera
        CategoryAttribute::create(['attribute_id' => 40, 'category_id' => 29, 'is_filter' => 1, 'icon' => 'fa-solid fa-tachometer-alt']); // Tốc độ quay
        CategoryAttribute::create(['attribute_id' => 106, 'category_id' => 29, 'is_filter' => 1, 'icon' => 'fa-solid fa-hdd']); // Chuẩn chịu tải 24/7 - Ổ cứng - Thẻ nhớ Camera
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 29, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 55, 'category_id' => 30, 'is_filter' => 1, 'icon' => 'fa-solid fa-print']); // Công nghệ in - Máy in
        CategoryAttribute::create(['attribute_id' => 56, 'category_id' => 30, 'is_filter' => 1, 'icon' => 'fa-solid fa-tachometer-alt']); // Tốc độ in - Máy in
        CategoryAttribute::create(['attribute_id' => 57, 'category_id' => 30, 'is_filter' => 1, 'icon' => 'fa-solid fa-desktop']); // Độ phân giải in - Máy in
        CategoryAttribute::create(['attribute_id' => 107, 'category_id' => 30, 'is_filter' => 1, 'icon' => 'fa-solid fa-palette']); // Loại in (Màu/Đen trắng) - Máy in
        CategoryAttribute::create(['attribute_id' => 108, 'category_id' => 30, 'is_filter' => 0, 'icon' => 'fa-solid fa-box']); // Khay giấy - Máy in
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 30, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 24, 'category_id' => 31, 'is_filter' => 1, 'icon' => 'fa-solid fa-desktop']); // Độ phân giải
        CategoryAttribute::create(['attribute_id' => 23, 'category_id' => 31, 'is_filter' => 1, 'icon' => 'fa-solid fa-ruler']); // Kích thước
        CategoryAttribute::create(['attribute_id' => 61, 'category_id' => 31, 'is_filter' => 1, 'icon' => 'fa-solid fa-wifi']); // Chuẩn WiFi
        CategoryAttribute::create(['attribute_id' => 109, 'category_id' => 31, 'is_filter' => 1, 'icon' => 'fa-solid fa-print']); // Máy in hóa đơn tích hợp - Máy POS
        CategoryAttribute::create(['attribute_id' => 110, 'category_id' => 31, 'is_filter' => 1, 'icon' => 'fa-solid fa-barcode']); // Hỗ trợ quét mã vạch - Máy POS
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 31, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 58, 'category_id' => 32, 'is_filter' => 1, 'icon' => 'fa-solid fa-code']); // Phiên bản - Phần mềm
        CategoryAttribute::create(['attribute_id' => 59, 'category_id' => 32, 'is_filter' => 1, 'icon' => 'fa-solid fa-clock']); // Thời hạn bản quyền - Phần mềm
        CategoryAttribute::create(['attribute_id' => 111, 'category_id' => 32, 'is_filter' => 1, 'icon' => 'fa-solid fa-file-contract']); // Loại giấy phép - Phần mềm
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 32, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 60, 'category_id' => 33, 'is_filter' => 1, 'icon' => 'fa-solid fa-tachometer-alt']); // Tốc độ - Thiết bị mạng
        CategoryAttribute::create(['attribute_id' => 61, 'category_id' => 33, 'is_filter' => 1, 'icon' => 'fa-solid fa-wifi']); // Chuẩn WiFi - Thiết bị mạng
        CategoryAttribute::create(['attribute_id' => 62, 'category_id' => 33, 'is_filter' => 1, 'icon' => 'fa-solid fa-ethernet']); // Số cổng LAN - Thiết bị mạng
        CategoryAttribute::create(['attribute_id' => 112, 'category_id' => 33, 'is_filter' => 1, 'icon' => 'fa-solid fa-antenna']); // Số ăng-ten - Thiết bị mạng
        CategoryAttribute::create(['attribute_id' => 113, 'category_id' => 33, 'is_filter' => 0, 'icon' => 'fa-solid fa-shield-alt']); // Bảo mật hỗ trợ - Thiết bị mạng
        CategoryAttribute::create(['attribute_id' => 104, 'category_id' => 33, 'is_filter' => 0, 'icon' => 'fa-solid fa-plug-circle-bolt']); // Hỗ trợ POE
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 33, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 122, 'category_id' => 34, 'is_filter' => 1, 'icon' => 'fa-solid fa-headphones']); // Loại kết nối Tai nghe
        CategoryAttribute::create(['attribute_id' => 123, 'category_id' => 34, 'is_filter' => 1, 'icon' => 'fa-solid fa-battery-half']); // Thời lượng pin Tai nghe
        CategoryAttribute::create(['attribute_id' => 124, 'category_id' => 34, 'is_filter' => 1, 'icon' => 'fa-solid fa-volume-high']); // Độ nhạy Tai nghe
        CategoryAttribute::create(['attribute_id' => 125, 'category_id' => 34, 'is_filter' => 0, 'icon' => 'fa-solid fa-microphone']); // Mic tích hợp Tai nghe
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 34, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 128, 'category_id' => 35, 'is_filter' => 1, 'icon' => 'fa-solid fa-bolt']); // Công suất Loa
        CategoryAttribute::create(['attribute_id' => 129, 'category_id' => 35, 'is_filter' => 1, 'icon' => 'fa-solid fa-ruler-combined']); // Kích thước Loa
        CategoryAttribute::create(['attribute_id' => 130, 'category_id' => 35, 'is_filter' => 1, 'icon' => 'fa-solid fa-list']); // Số kênh Loa
        CategoryAttribute::create(['attribute_id' => 19, 'category_id' => 35, 'is_filter' => 1, 'icon' => 'fa-solid fa-plug']); // Loại kết nối Loa (Chuẩn kết nối là attribute thứ 18)
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 35, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất


        CategoryAttribute::create(['attribute_id' => 20, 'category_id' => 36, 'is_filter' => 1, 'icon' => 'fa-solid fa-hdd']); // Tốc độ đọc/ghi - USB - Ổ cứng di động
        CategoryAttribute::create(['attribute_id' => 54, 'category_id' => 36, 'is_filter' => 1, 'icon' => 'fa-solid fa-hdd']); // Dung lượng hỗ trợ tối đa - USB - Ổ cứng di động
        CategoryAttribute::create(['attribute_id' => 15, 'category_id' => 36, 'is_filter' => 1, 'icon' => 'fa-solid fa-plug-circle-bolt']); // Chuẩn cổng kết nối - USB - Ổ cứng di động
        CategoryAttribute::create(['attribute_id' => 114, 'category_id' => 36, 'is_filter' => 0, 'icon' => 'fa-solid fa-shield-alt']); // Khả năng chống sốc - USB - Ổ cứng di động
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 36, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 20, 'category_id' => 37, 'is_filter' => 1, 'icon' => 'fa-solid fa-hdd']); // Tốc độ đọc/ghi - Thẻ nhớ
        CategoryAttribute::create(['attribute_id' => 54, 'category_id' => 37, 'is_filter' => 1, 'icon' => 'fa-solid fa-hdd']); // Dung lượng hỗ trợ tối đa - Thẻ nhớ
        CategoryAttribute::create(['attribute_id' => 64, 'category_id' => 37, 'is_filter' => 1, 'icon' => 'fa-solid fa-sd-card']); // Chuẩn thẻ - Thẻ nhớ
        CategoryAttribute::create(['attribute_id' => 115, 'category_id' => 37, 'is_filter' => 1, 'icon' => 'fa-solid fa-tachometer-alt']); // Class tốc độ - Thẻ nhớ
        CategoryAttribute::create(['attribute_id' => 116, 'category_id' => 37, 'is_filter' => 0, 'icon' => 'fa-solid fa-tachometer-alt']); // UHS hỗ trợ - Thẻ nhớ
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 37, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 65, 'category_id' => 38, 'is_filter' => 1, 'icon' => 'fa-solid fa-cable']); // Loại cáp - Dây cáp
        CategoryAttribute::create(['attribute_id' => 78, 'category_id' => 38, 'is_filter' => 1, 'icon' => 'fa-solid fa-ruler']); // Chiều dài - Dây cáp
        CategoryAttribute::create(['attribute_id' => 67, 'category_id' => 38, 'is_filter' => 1, 'icon' => 'fa-solid fa-plug']); // Đầu kết nối - Dây cáp
        CategoryAttribute::create(['attribute_id' => 117, 'category_id' => 38, 'is_filter' => 0, 'icon' => 'fa-solid fa-shield-alt']); // Bọc chống nhiễu - Dây cáp
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 38, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 68, 'category_id' => 39, 'is_filter' => 1, 'icon' => 'fa-solid fa-tint']); // Khả năng chống nước - Balo - Túi chống sốc
        CategoryAttribute::create(['attribute_id' => 29, 'category_id' => 39, 'is_filter' => 1, 'icon' => 'fa-solid fa-box']); // Chất liệu - Balo - Túi chống sốc
        CategoryAttribute::create(['attribute_id' => 118, 'category_id' => 39, 'is_filter' => 1, 'icon' => 'fa-solid fa-briefcase']); // Số ngăn - Balo - Túi chống sốc
        CategoryAttribute::create(['attribute_id' => 119, 'category_id' => 39, 'is_filter' => 0, 'icon' => 'fa-solid fa-shield-alt']); // Đệm chống sốc - Balo - Túi chống sốc
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 39, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 29, 'category_id' => 40, 'is_filter' => 1, 'icon' => 'fa-solid fa-box']); // Chất liệu
        CategoryAttribute::create(['attribute_id' => 69, 'category_id' => 40, 'is_filter' => 1, 'icon' => 'fa-solid fa-arrows-alt-v']); // Khả năng điều chỉnh độ cao - Giá đỡ Laptop
        CategoryAttribute::create(['attribute_id' => 120, 'category_id' => 40, 'is_filter' => 0, 'icon' => 'fa-solid fa-fold']); // Khả năng gấp gọn - Giá đỡ Laptop
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 40, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

        CategoryAttribute::create(['attribute_id' => 70, 'category_id' => 41, 'is_filter' => 1, 'icon' => 'fa-solid fa-vial']); // Thành phần - Bộ vệ sinh máy tính
        CategoryAttribute::create(['attribute_id' => 71, 'category_id' => 41, 'is_filter' => 1, 'icon' => 'fa-solid fa-flask']); // Dung tích - Bộ vệ sinh máy tính
        CategoryAttribute::create(['attribute_id' => 72, 'category_id' => 41, 'is_filter' => 0, 'icon' => 'fa-solid fa-tools']); // Phụ kiện đi kèm - Bộ vệ sinh máy tính
        CategoryAttribute::create(['attribute_id' => 121, 'category_id' => 41, 'is_filter' => 1, 'icon' => 'fa-solid fa-spray-can']); // Loại dung dịch - Bộ vệ sinh máy tính
        CategoryAttribute::create(['attribute_id' => 132, 'category_id' => 41, 'is_filter' => 1, 'icon' => 'fa-solid fa-manufacturer']); // Hãng sản xuất

    }
}
