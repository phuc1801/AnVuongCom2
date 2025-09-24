<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ---------------- Thuộc tính chung ----------------
        Attribute::create(['name' => 'CPU']);
        Attribute::create(['name' => 'RAM']);
        Attribute::create(['name' => 'Ổ cứng']);
        Attribute::create(['name' => 'Màn hình']);
        Attribute::create(['name' => 'Card đồ họa']);
        Attribute::create(['name' => 'Pin']);
        Attribute::create(['name' => 'Hệ điều hành']);
        Attribute::create(['name' => 'Khối lượng']);
        Attribute::create(['name' => 'Mainboard']);
        Attribute::create(['name' => 'PSU']);
        Attribute::create(['name' => 'Case']);
        Attribute::create(['name' => 'Công suất']);
        Attribute::create(['name' => 'Điện áp']);
        Attribute::create(['name' => 'Dòng điện']);
        Attribute::create(['name' => 'Chuẩn cổng kết nối']);
        Attribute::create(['name' => 'Loại bàn phím']);
        Attribute::create(['name' => 'Đèn nền']);
        Attribute::create(['name' => 'Ngôn ngữ layout']);
        Attribute::create(['name' => 'Chuẩn kết nối']);
        Attribute::create(['name' => 'Tốc độ đọc/ghi']);
        Attribute::create(['name' => 'Loại RAM']);
        Attribute::create(['name' => 'Bus RAM']);
        Attribute::create(['name' => 'Kích thước']);
        Attribute::create(['name' => 'Độ phân giải']);
        Attribute::create(['name' => 'Tấm nền']);
        Attribute::create(['name' => 'Tần số quét']);
        Attribute::create(['name' => 'Chuẩn hiệu suất']);
        Attribute::create(['name' => 'Số đầu cấp nguồn']);
        Attribute::create(['name' => 'Chất liệu']);
        Attribute::create(['name' => 'Hỗ trợ mainboard']);
        Attribute::create(['name' => 'Socket']);
        Attribute::create(['name' => 'Chipset']);
        Attribute::create(['name' => 'Khe RAM']);
        Attribute::create(['name' => 'Cổng kết nối']);
        Attribute::create(['name' => 'Số nhân']);
        Attribute::create(['name' => 'Số luồng']);
        Attribute::create(['name' => 'Xung nhịp']);
        Attribute::create(['name' => 'Bộ nhớ đệm']);
        Attribute::create(['name' => 'Độ ồn']);
        Attribute::create(['name' => 'Tốc độ quay']);
        Attribute::create(['name' => 'Dung lượng VRAM']);
        Attribute::create(['name' => 'Loại bộ nhớ']);
        Attribute::create(['name' => 'Cổng xuất hình']);
        Attribute::create(['name' => 'TDP']);
        Attribute::create(['name' => 'Kiểu kết nối']);
        Attribute::create(['name' => 'Loại switch']);
        Attribute::create(['name' => 'Độ phân giải DPI']);
        Attribute::create(['name' => 'Số nút bấm']);
        Attribute::create(['name' => 'Góc nhìn']);
        Attribute::create(['name' => 'Mic tích hợp']);
        Attribute::create(['name' => 'Chuẩn nén']);
        Attribute::create(['name' => 'Tầm nhìn ban đêm']);
        Attribute::create(['name' => 'Số kênh']);
        Attribute::create(['name' => 'Dung lượng hỗ trợ tối đa']);
        Attribute::create(['name' => 'Công nghệ in']);
        Attribute::create(['name' => 'Tốc độ in']);
        Attribute::create(['name' => 'Độ phân giải in']);
        Attribute::create(['name' => 'Phiên bản']);
        Attribute::create(['name' => 'Thời hạn bản quyền']);
        Attribute::create(['name' => 'Tốc độ']);
        Attribute::create(['name' => 'Chuẩn WiFi']);
        Attribute::create(['name' => 'Số cổng LAN']);
        Attribute::create(['name' => 'Tốc độ truyền dữ liệu']);
        Attribute::create(['name' => 'Chuẩn thẻ']);
        Attribute::create(['name' => 'Loại cáp']);
        Attribute::create(['name' => 'Chiều dài']);
        Attribute::create(['name' => 'Đầu kết nối']);
        Attribute::create(['name' => 'Khả năng chống nước']);
        Attribute::create(['name' => 'Khả năng điều chỉnh độ cao']);
        Attribute::create(['name' => 'Thành phần']);
        Attribute::create(['name' => 'Dung tích']);
        Attribute::create(['name' => 'Phụ kiện đi kèm']);

        // ---------------- Thuộc tính riêng từng Category ----------------

        // Laptop
        Attribute::create(['name' => 'Cổng kết nối Laptop']);
        Attribute::create(['name' => 'Webcam tích hợp']);

        // PC
        Attribute::create(['name' => 'Kích thước thùng máy']);
        Attribute::create(['name' => 'Khả năng nâng cấp']);

        // Sạc
        Attribute::create(['name' => 'Loại chân cắm']);
        Attribute::create(['name' => 'Chiều dài dây sạc']);

        // Bàn phím Laptop
        Attribute::create(['name' => 'Touchpad']);
        Attribute::create(['name' => 'Bàn phím số phụ']);

        // Ổ cứng
        Attribute::create(['name' => 'Loại ổ (HDD/SSD)']);

        // RAM Laptop
        Attribute::create(['name' => 'Số khe RAM Laptop hỗ trợ']);

        // Màn hình Laptop
        Attribute::create(['name' => 'Độ sáng']);
        Attribute::create(['name' => 'Khả năng cảm ứng']);

        // Nguồn (PSU)
        Attribute::create(['name' => 'Chuẩn bảo vệ an toàn']);

        // Case
        Attribute::create(['name' => 'Số quạt tích hợp']);
        Attribute::create(['name' => 'Cổng I/O mặt trước']);

        // Mainboard
        Attribute::create(['name' => 'Hỗ trợ đa GPU']);

        // CPU
        Attribute::create(['name' => 'Loại CPU']);
        Attribute::create(['name' => 'Tiến trình sản xuất']);

        // RAM PC
        Attribute::create(['name' => 'Hỗ trợ XMP/EXPO']);

        // Fan tản nhiệt
        Attribute::create(['name' => 'Loại tản nhiệt (Air/Liquid)']);
        Attribute::create(['name' => 'LED RGB']);

        // VGA
        Attribute::create(['name' => 'Chuẩn giao tiếp']);
        Attribute::create(['name' => 'Độ dài card']);

        // Màn hình PC
        Attribute::create(['name' => 'Thời gian phản hồi']);
        Attribute::create(['name' => 'Khả năng xoay dọc']);

        // Bàn phím
        Attribute::create(['name' => 'Anti-ghosting']);
        Attribute::create(['name' => 'Macro hỗ trợ']);

        // Chuột
        Attribute::create(['name' => 'LED RGB chuột']); // "Trọng lượng" đã có chung rồi

        // Webcam
        Attribute::create(['name' => 'Tốc độ khung hình']);
        Attribute::create(['name' => 'Khả năng xoay']);

        // Camera giám sát
        Attribute::create(['name' => 'Chuẩn IP']);
        Attribute::create(['name' => 'Hỗ trợ POE']);

        // Đầu ghi hình
        Attribute::create(['name' => 'Loại đầu ghi (DVR/NVR)']);

        // Ổ cứng - Thẻ nhớ Camera
        Attribute::create(['name' => 'Chuẩn chịu tải 24/7']);

        // Máy in
        Attribute::create(['name' => 'Loại in (Màu/Đen trắng)']);
        Attribute::create(['name' => 'Khay giấy']);

        // Máy POS
        Attribute::create(['name' => 'Máy in hóa đơn tích hợp']);
        Attribute::create(['name' => 'Hỗ trợ quét mã vạch']);

        // Phần mềm
        Attribute::create(['name' => 'Loại giấy phép']);

        // Thiết bị mạng
        Attribute::create(['name' => 'Số ăng-ten']);
        Attribute::create(['name' => 'Bảo mật hỗ trợ']);

        // USB - Ổ cứng di động
        Attribute::create(['name' => 'Khả năng chống sốc']);

        // Thẻ nhớ
        Attribute::create(['name' => 'Class tốc độ']);
        Attribute::create(['name' => 'UHS hỗ trợ']);

        // Dây cáp
        Attribute::create(['name' => 'Bọc chống nhiễu']);

        // Balo - Túi chống sốc
        Attribute::create(['name' => 'Số ngăn']);
        Attribute::create(['name' => 'Đệm chống sốc']);

        // Giá đỡ Laptop
        Attribute::create(['name' => 'Khả năng gấp gọn']);

        // Bộ vệ sinh máy tính
        Attribute::create(['name' => 'Loại dung dịch']);

        // ---------------- Thuộc tính Tai nghe ----------------
        Attribute::create(['name' => 'Loại kết nối Tai nghe']);
        Attribute::create(['name' => 'Thời lượng pin Tai nghe']);
        Attribute::create(['name' => 'Độ nhạy Tai nghe']);
        Attribute::create(['name' => 'Mic tích hợp Tai nghe']);
        Attribute::create(['name' => 'Chuẩn nén Tai nghe']);
        Attribute::create(['name' => 'Tầm nhìn ban đêm Tai nghe']);

        // ---------------- Thuộc tính Loa ----------------
        Attribute::create(['name' => 'Công suất Loa']);
        Attribute::create(['name' => 'Kích thước Loa']);
        Attribute::create(['name' => 'Số kênh Loa']);
        Attribute::create(['name' => 'Tần số quét Loa']);
        // Bổ sung laptop
        Attribute::create(['name' => 'Hãng sản xuất']);
    }
}
