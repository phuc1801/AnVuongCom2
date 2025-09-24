<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DELL 
        Product::create([ //1
            'name' => 'Laptop Dell Latitude 3520 P108F001 70280538',
            'description' => 'Dell Latitude 3520 sở hữu thiết kế mỏng nhẹ, bền bỉ, được trang bị bộ vi xử lý Intel Core thế hệ mới giúp tối ưu hiệu năng. Máy thích hợp cho dân văn phòng, doanh nhân và sinh viên cần một chiếc laptop hoạt động ổn định, pin lâu và bàn phím thoải mái.',
            'price' => 18500000,
            'real_price' => 19900000,
            'quantity' => 5,
            'category_id' => 1,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'laptop-dell-latitude-3520-p108f001-70280538',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //2
            'name' => 'Laptop Dell Vostro 16 V5630 i5P085W11GRU',
            'description' => 'Dell Vostro 16 V5630 mang đến hiệu năng mạnh mẽ nhờ CPU Intel Core i5, RAM dung lượng lớn cùng ổ cứng SSD tốc độ cao. Máy sở hữu màn hình lớn 16 inch, phù hợp cho làm việc đa nhiệm, học tập và giải trí với không gian hiển thị rộng rãi.',
            'price' => 20900000,
            'real_price' => 22500000,
            'quantity' => 3,
            'category_id' => 1,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'laptop-dell-vostro-16-v5630-i5p085w11gru',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //3
            'name' => 'Laptop Dell Inspiron 15 7501 X3MRY1',
            'description' => 'Dell Inspiron 15 7501 mang đến trải nghiệm làm việc và giải trí mượt mà nhờ vi xử lý mạnh mẽ, màn hình sắc nét và bàn phím tiện lợi. Thiết kế thời trang, khung máy chắc chắn cùng khả năng tản nhiệt tốt giúp thiết bị hoạt động ổn định trong thời gian dài.',
            'price' => 17900000,
            'real_price' => 19500000,
            'quantity' => 4,
            'category_id' => 1,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'cái',
            'slug' => 'laptop-dell-inspiron-15-7501-x3mrry1',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //4
            'name' => 'Laptop gaming Dell Alienware M15 R6 P109F001CBL',
            'description' => 'Dell Alienware M15 R6 là chiếc laptop gaming cao cấp với thiết kế hầm hố, hệ thống tản nhiệt tiên tiến và card đồ họa rời mạnh mẽ. Thiết bị mang đến trải nghiệm chơi game mượt mà, hình ảnh sắc nét và tốc độ phản hồi nhanh, phù hợp cho game thủ và người làm đồ họa.',
            'price' => 46900000,
            'real_price' => 49900000,
            'quantity' => 2,
            'category_id' => 1,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'cái',
            'slug' => 'laptop-gaming-dell-alienware-m15-r6-p109f001cbl',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //5
            'name' => 'Laptop Dell Inspiron 14 5440 i5U085W11BU',
            'description' => 'Dell Inspiron 14 5440 có thiết kế gọn nhẹ, màn hình 14 inch Full HD, hiệu năng ổn định nhờ bộ vi xử lý Intel Core i5 thế hệ mới. Thiết bị phù hợp với học tập, làm việc văn phòng và di chuyển thường xuyên, đáp ứng tốt các nhu cầu cơ bản đến nâng cao.',
            'price' => 15900000,
            'real_price' => 17500000,
            'quantity' => 1,
            'category_id' => 1,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'laptop-dell-inspiron-14-5440-i5u085w11bu',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //LENOVO
        Product::create([ //6
            'name' => 'Laptop Lenovo IdeaPad Slim 3 15IRH10 83K1000JVN',
            'description' => 'Lenovo IdeaPad Slim 3 15IRH10 là chiếc laptop phổ thông với thiết kế gọn nhẹ, màn hình 15.6 inch Full HD, vi xử lý Intel Core i5 thế hệ mới, đáp ứng tốt nhu cầu học tập và làm việc văn phòng. Đây là lựa chọn cân bằng giữa hiệu năng và giá thành.',
            'price' => 13500000,
            'real_price' => 14900000,
            'quantity' => 4,
            'category_id' => 1,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'laptop-lenovo-ideapad-slim-3-15irh10-83k1000jvn',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //7
            'name' => 'Laptop Lenovo Yoga Slim 7 14IMH9 83CV00AJVN',
            'description' => 'Lenovo Yoga Slim 7 14IMH9 là mẫu ultrabook cao cấp với thiết kế mỏng nhẹ, màn hình 14 inch độ phân giải cao, vi xử lý Intel Core i7 mạnh mẽ. Máy phù hợp cho người dùng cần sự di động nhưng vẫn đảm bảo hiệu năng xử lý công việc đa nhiệm.',
            'price' => 25900000,
            'real_price' => 27900000,
            'quantity' => 2,
            'category_id' => 1,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'laptop-lenovo-yoga-slim-7-14imh9-83cv00ajvn',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //8
            'name' => 'Laptop Lenovo ThinkPad X9-15 Gen 1 21Q60055VN',
            'description' => 'Lenovo ThinkPad X9-15 Gen 1 thuộc dòng laptop doanh nhân cao cấp, có thiết kế bền bỉ, bàn phím ThinkPad đặc trưng, vi xử lý Intel Core i7, RAM dung lượng lớn. Máy hướng đến người dùng doanh nghiệp, lập trình viên và những ai cần độ ổn định cao.',
            'price' => 35900000,
            'real_price' => 37900000,
            'quantity' => 1,
            'category_id' => 1,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'laptop-lenovo-thinkpad-x9-15-gen-1-21q60055vn',
            'guarantee' => '3 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //9
            'name' => 'Laptop gaming Lenovo LOQ 15IRX9 83DV013PVN',
            'description' => 'Lenovo LOQ 15IRX9 là mẫu laptop gaming tầm trung với màn hình 15.6 inch tần số quét cao, card đồ họa rời NVIDIA RTX, vi xử lý Intel Core i5/i7 hiệu năng cao. Máy phù hợp cho game thủ và người làm đồ họa cần hiệu năng mạnh mẽ trong tầm giá.',
            'price' => 28900000,
            'real_price' => 30900000,
            'quantity' => 1,
            'category_id' => 1,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'laptop-gaming-lenovo-loq-15irx9-83dv013pvn',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //10
            'name' => 'Laptop gaming Lenovo Legion Pro 7 16IAX10H 83F5008WVN',
            'description' => 'Lenovo Legion Pro 7 16IAX10H thuộc dòng gaming cao cấp với màn hình 16 inch độ phân giải QHD, card đồ họa NVIDIA RTX series mạnh mẽ, vi xử lý Intel Core i9 thế hệ mới. Đây là lựa chọn hàng đầu cho game thủ chuyên nghiệp và người làm đồ họa 3D.',
            'price' => 48900000,
            'real_price' => 51900000,
            'quantity' => 3,
            'category_id' => 1,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'laptop-gaming-lenovo-legion-pro-7-16iax10h-83f5008wvn',
            'guarantee' => '3 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //ACER
        Product::create([ //11
            'name' => 'Laptop Acer Aspire 3 A314 42P R3B3',
            'description' => 'Acer Aspire 3 A314 42P R3B3 sở hữu thiết kế gọn gàng, hiệu năng ổn định nhờ vi xử lý AMD Ryzen, màn hình 14 inch Full HD, phù hợp cho học tập và làm việc văn phòng cơ bản.',
            'price' => 11200000,
            'real_price' => 12500000,
            'quantity' => 2,
            'category_id' => 1,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'laptop-acer-aspire-3-a314-42p-r3b3',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //12
            'name' => 'Laptop Acer Aspire Lite AL15 72P 7232',
            'description' => 'Acer Aspire Lite AL15 72P 7232 nổi bật với thiết kế mỏng nhẹ, vi xử lý Intel thế hệ mới, màn hình 15.6 inch Full HD, mang đến trải nghiệm học tập và làm việc hiệu quả.',
            'price' => 10500000,
            'real_price' => 11800000,
            'quantity' => 1,
            'category_id' => 1,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'laptop-acer-aspire-lite-al15-72p-7232',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //13
            'name' => 'Laptop Acer Aspire Go AG14 71M 7681',
            'description' => 'Acer Aspire Go AG14 71M 7681 hướng đến người dùng phổ thông với thiết kế hiện đại, cấu hình tiết kiệm điện năng, phù hợp cho học tập và các nhu cầu làm việc nhẹ nhàng.',
            'price' => 9700000,
            'real_price' => 10800000,
            'quantity' => 2,
            'category_id' => 1,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'laptop-acer-aspire-go-ag14-71m-7681',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //14
            'name' => 'Laptop Acer Swift X14 SFX14 71G 78SY',
            'description' => 'Acer Swift X14 SFX14 71G 78SY được trang bị vi xử lý Intel Core H-series cùng card đồ họa rời, hiệu năng mạnh mẽ cho học tập, làm việc chuyên môn và giải trí.',
            'price' => 19500000,
            'real_price' => 21000000,
            'quantity' => 1,
            'category_id' => 1,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'laptop-acer-swift-x14-sfx14-71g-78Sy',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //15
            'name' => 'Laptop Acer Swift Go 14 SFG14 73 75YM',
            'description' => 'Acer Swift Go 14 SFG14 73 75YM nổi bật với thiết kế thời trang, màn hình OLED sống động, vi xử lý Intel Core thế hệ mới, đáp ứng nhu cầu học tập, công việc và giải trí đa phương tiện.',
            'price' => 17800000,
            'real_price' => 19000000,
            'quantity' => 2,
            'category_id' => 1,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'laptop-acer-swift-go-14-sfg14-73-75ym',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //ASUS
        Product::create([ //16
            'name' => 'Laptop ASUS ExpertBook P1 P1503CVA i5SE16 50W',
            'description' => 'ASUS ExpertBook P1 P1503CVA là chiếc laptop văn phòng bền bỉ, trang bị vi xử lý Intel Core i5 thế hệ mới, đáp ứng tốt nhu cầu học tập và làm việc. Thiết kế mỏng nhẹ, pin ổn định, phù hợp cho người dùng di chuyển nhiều.',
            'price' => 15490000,
            'real_price' => 16990000,
            'quantity' => 3,
            'category_id' => 1,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'laptop-asus-expertbook-p1-p1503cva-i5se16-50w',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //17
            'name' => 'Laptop ASUS Vivobook S 15 OLED S5507QA MA090WS',
            'description' => 'ASUS Vivobook S 15 OLED S5507QA nổi bật với màn hình OLED sắc nét, vi xử lý mạnh mẽ, mang lại trải nghiệm mượt mà cho học tập, công việc sáng tạo và giải trí đa phương tiện.',
            'price' => 20990000,
            'real_price' => 22990000,
            'quantity' => 1,
            'category_id' => 1,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'laptop-asus-vivobook-s-15-oled-s5507qa-ma090ws',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //18
            'name' => 'Laptop ASUS Vivobook S14 S3407CA LY095WS',
            'description' => 'ASUS Vivobook S14 S3407CA có thiết kế hiện đại, màn hình 14 inch Full HD, hiệu năng ổn định nhờ vi xử lý Intel thế hệ mới, phù hợp cho sinh viên và nhân viên văn phòng.',
            'price' => 17490000,
            'real_price' => 18990000,
            'quantity' => 2,
            'category_id' => 1,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'laptop-asus-vivobook-s14-s3407ca-ly095ws',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //19
            'name' => 'Laptop ASUS Zenbook 14 UX3405CA PZ204WS',
            'description' => 'ASUS Zenbook 14 UX3405CA sở hữu thiết kế mỏng nhẹ, màn hình 14 inch chuẩn màu, hiệu năng mạnh mẽ, pin bền bỉ, mang đến trải nghiệm cao cấp cho công việc và giải trí.',
            'price' => 25990000,
            'real_price' => 27990000,
            'quantity' => 4,
            'category_id' => 1,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'laptop-asus-zenbook-14-ux3405ca-pz204ws',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //20
            'name' => 'Laptop ASUS Expertbook P1403CVA i716-50W',
            'description' => 'ASUS Expertbook P1403CVA i7 mang đến hiệu năng mạnh mẽ với bộ xử lý Intel Core i7, thiết kế bền bỉ, thích hợp cho môi trường làm việc chuyên nghiệp, hỗ trợ đa tác vụ mượt mà.',
            'price' => 18990000,
            'real_price' => 20490000,
            'quantity' => 1,
            'category_id' => 1,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'laptop-asus-expertbook-p1403cva-i716-50w',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //PC
        Product::create([ //21
            'name' => 'PC Homework i5 12400',
            'description' => 'Bộ PC Homework sử dụng vi xử lý Intel Core i5-12400, hiệu năng ổn định cho học tập, văn phòng và giải trí cơ bản.',
            'price' => 12000000,
            'real_price' => 12500000,
            'quantity' => 1,
            'category_id' => 2,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'pc-homework-i5-12400',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //22
            'name' => 'PC Intel i9-14900K VGA RTX 4060 Ti',
            'description' => 'PC Intel Core i9-14900K kết hợp VGA RTX 4060 Ti mang lại hiệu năng mạnh mẽ, phù hợp cho game thủ và công việc đồ họa.',
            'price' => 42000000,
            'real_price' => 45000000,
            'quantity' => 4,
            'category_id' => 2,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'pc-intel-i9-14900k-vga-rtx-4060-ti',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //23
            'name' => 'PC Homework Athlon 3000G',
            'description' => 'PC Homework Athlon 3000G giá rẻ, phù hợp cho nhu cầu học tập, văn phòng và giải trí nhẹ.',
            'price' => 6500000,
            'real_price' => 7000000,
            'quantity' => 5,
            'category_id' => 2,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'pc-homework-athlon-3000g',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
 
        Product::create([ //24
            'name' => 'PC Intel i5-12400F VGA RTX 5060 (Main H)',
            'description' => 'PC Intel Core i5-12400F kết hợp VGA RTX 5060, bo mạch chủ (Main H), tối ưu cho gaming và làm việc.',
            'price' => 18000000,
            'real_price' => 19000000,
            'quantity' => 4,
            'category_id' => 2,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'pc-intel-i5-12400f-vga-rtx-5060-main-h',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //25
            'name' => 'PC Intel i5-12400F VGA RTX 5050',
            'description' => 'PC Intel Core i5-12400F kết hợp VGA RTX 5050, lựa chọn cân bằng cho nhu cầu chơi game và công việc.',
            'price' => 17000000,
            'real_price' => 18000000,
            'quantity' => 3,
            'category_id' => 2,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'pc-intel-i5-12400f-vga-rtx-5050',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //26
            'name' => 'Sạc Laptop HP 19.5V 3.33A chân kim nhỏ',
            'description' => 'Sạc Laptop HP 65W 19.5V 3.33A, chân kim nhỏ, độ bền cao',
            'price' => 750000,
            'real_price' => 780000,
            'quantity' => 4,
            'category_id' => 11,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'sac-laptop-hp-195v-333a-chan-kim-nho',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //27
            'name' => 'Sạc Laptop Lenovo 20V 3.25A đầu vuông',
            'description' => 'Sạc Laptop Lenovo 65W 20V 3.25A, đầu vuông tiêu chuẩn cho các dòng ThinkPad',
            'price' => 690000,
            'real_price' => 720000,
            'quantity' => 5,
            'category_id' => 11,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'sac-laptop-lenovo-20v-325a-dau-vuong',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //28
            'name' => 'Sạc Laptop Asus 19V 4.74A chân thường',
            'description' => 'Sạc Laptop Asus 90W 19V 4.74A chân thường, dùng cho nhiều dòng máy Asus',
            'price' => 830000,
            'real_price' => 880000,
            'quantity' => 3,
            'category_id' => 11,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'sac-laptop-asus-19v-474a-chan-thuong',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //29
            'name' => 'Màn hình Laptop 15.6 inch Slim 40 Pin narrow EDP IPS NE156FHM NZ1 240HZ',
            'description' => 'Màn hình Laptop 15.6 inch Slim 40 Pin narrow EDP IPS NE156FHM NZ1 240HZ',
            'price' => 3400000,
            'real_price' => 3500000,
            'quantity' => 1,
            'category_id' => 15,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'man-hinh-laptop-15-6-inch-slim-40-pin-narrow-edp-ips-ne156fhm-nz1-240hz',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //30
            'name' => 'Màn hình Laptop 14 inch N140HCE G52 NV140FHM N47 30 Pin FHD',
            'description' => 'Màn hình Laptop 14 inch N140HCE G52 NV140FHM N47 30 Pin FHD',
            'price' => 3100000,
            'real_price' => 3200000,
            'quantity' => 3,
            'category_id' => 15,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'man-hinh-laptop-14-inch-n140hce-g52-nv140fhm-n47-30-pin-fhd',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //31
            'name' => 'Màn hình laptop 14 inch Asus Vivobook TM420 N140HCA EAC FHD 60 Hz Gương 30 Pin Cảm Ứng',
            'description' => 'Màn hình laptop 14 inch Asus Vivobook TM420 N140HCA EAC FHD 60 Hz Gương 30 Pin Cảm Ứng',
            'price' => 3500000,
            'real_price' => 3600000,
            'quantity' => 4,
            'category_id' => 15,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'man-hinh-laptop-14-inch-asus-vivobook-tm420-n140hca-eac-fhd-60-hz-guong-30-pin-cam-ung',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //32
            'name' => 'RAM Laptop Kingston 128GB 3200MHz KVR32S22S8 8',
            'description' => 'RAM Laptop Kingston 128GB 3200MHz KVR32S22S8 8',
            'price' => 11500000,
            'real_price' => 12000000,
            'quantity' => 4,
            'category_id' => 14,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'ram-laptop-kingston-128gb-3200mhz-kvr32s22s8-8',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //33
            'name' => 'RAM Laptop Lexar 8GB 3200MHZ DDR4 CL22',
            'description' => 'RAM Laptop Lexar 8GB 3200MHZ DDR4 CL22',
            'price' => 1700000,
            'real_price' => 1800000,
            'quantity' => 2,
            'category_id' => 14,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'ram-laptop-lexar-8gb-3200mhz-ddr4-cl22',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //34
            'name' => 'RAM PC ADATA XPG D50 RGB 16GB 3200MHz DDR4',
            'description' => 'RAM PC ADATA XPG D50 RGB 16GB 3200MHz DDR4',
            'price' => 2400000,
            'real_price' => 2500000,
            'quantity' => 1,
            'category_id' => 14,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'ram-pc-adata-xpg-d50-rgb-16gb-3200mhz-ddr4',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //35
            'name' => 'Ổ cứng SSD Kingston NV3 PCIe 4.0 NVMe 1TB',
            'description' => 'Ổ cứng SSD Kingston NV3 PCIe 4.0 NVMe 1TB',
            'price' => 3100000,
            'real_price' => 3200000,
            'quantity' => 2,
            'category_id' => 13,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'o-cung-ssd-kingston-nv3-pcie-40-nvme-1tb',
            'guarantee' => '3 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //36
            'name' => 'Ổ cứng SSD ADATA SU650 SATA III 2.5 512GB',
            'description' => 'Ổ cứng SSD ADATA SU650 SATA III 2.5 inch dung lượng 512GB',
            'price' => 1400000,
            'real_price' => 1500000,
            'quantity' => 3,
            'category_id' => 13,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'o-cung-ssd-adata-su650-sata-iii-25-512gb',
            'guarantee' => '3 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //37
            'name' => 'Ổ cứng SSD ADATA LEGEND 860 PCIE GEN4 X4 M2 2280 R6000 W5000 500GB',
            'description' => 'Ổ cứng SSD ADATA LEGEND 860 PCIe Gen4 x4 M.2 2280 dung lượng 500GB',
            'price' => 2700000,
            'real_price' => 2800000,
            'quantity' => 2,
            'category_id' => 13,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'o-cung-ssd-adata-legend-860-pcie-gen4-x4-m2-2280-r6000-w5000-500gb',
            'guarantee' => '3 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //38
            'name' => 'Bàn phím Laptop Acer Aspire 4736 3750 3935 4250 4251 4252 4253 4333 4336 4535 4551 4735 4935 4937 3810 4810 4810T 4235 4540 4240 4740G 4733 4738 4740 4741 4745 4743',
            'description' => 'Bàn phím Laptop Acer Aspire nhiều model tương thích',
            'price' => 550000,
            'real_price' => 600000,
            'quantity' => 4,
            'category_id' => 12,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'ban-phim-laptop-acer-aspire-4736-3750-3935-4250-4251-4252-4253-4333-4336-4535-4551-4735-4935-4937-3810-4810-4810t-4235-4540-4240-4740g-4733-4738-4740-4741-4745-4743',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //39
            'name' => 'Bàn phím Laptop Toshiba Satellite L640 L600 L630 L635 L645 L745 C600 C640 L735',
            'description' => 'Bàn phím Laptop Toshiba Satellite nhiều model tương thích',
            'price' => 500000,
            'real_price' => 550000,
            'quantity' => 3,
            'category_id' => 12,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'ban-phim-laptop-toshiba-satellite-l640-l600-l630-l635-l645-l745-c600-c640-l735',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //40
            'name' => 'Bàn phím Laptop Asus K50 K50A K50I K50IJ K50IN P50',
            'description' => 'Bàn phím Laptop Asus các model K50, P50',
            'price' => 550000,
            'real_price' => 600000,
            'quantity' => 3,
            'category_id' => 12,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'ban-phim-laptop-asus-k50-k50a-k50i-k50ij-k50in-p50',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //41
            'name' => 'Màn hình thông minh LG MyView 25SR50F 25 inch',
            'description' => 'Màn hình thông minh LG MyView 25SR50F kích thước 25 inch',
            'price' => 6800000,
            'real_price' => 7000000,
            'quantity' => 4,
            'category_id' => 23,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'man-hinh-thong-minh-lg-myview-25sr50f-25-inch',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //42
            'name' => 'Màn hình văn phòng Dell U2424H 24 inch',
            'description' => 'Màn hình văn phòng Dell U2424H kích thước 24 inch',
            'price' => 6300000,
            'real_price' => 6500000,
            'quantity' => 1,
            'category_id' => 23,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'man-hinh-van-phong-dell-u2424h-24-inch',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //43
            'name' => 'Màn hình Xiaomi A27QI 27 inch',
            'description' => 'Màn hình Xiaomi A27QI kích thước 27 inch',
            'price' => 5800000,
            'real_price' => 6000000,
            'quantity' => 2,
            'category_id' => 23,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'man-hinh-xiaomi-a27qi-27-inch',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //44
            'name' => 'Quạt led Xigmatek Infinity Reverse 120mm Fan Fixed RGB',
            'description' => 'Quạt led Xigmatek Infinity Reverse 120mm Fan Fixed RGB',
            'price' => 320000,
            'real_price' => 350000,
            'quantity' => 5,
            'category_id' => 21,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'quat-led-xigmatek-infinity-reverse-120mm-fan-fixed-rgb',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //45
            'name' => 'Tản nhiệt nước Cooler Master ML240L V2 RGB',
            'description' => 'Tản nhiệt nước Cooler Master ML240L V2 RGB hiệu suất cao',
            'price' => 2400000,
            'real_price' => 2500000,
            'quantity' => 1,
            'category_id' => 21,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'tan-nhiet-nuoc-cooler-master-ml240l-v2-rgb',
            'guarantee' => '2 năm',  
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //46
            'name' => 'Tản nhiệt nước AIO DeepCool Mystique 240',
            'description' => 'Tản nhiệt nước AIO DeepCool Mystique 240 RGB',
            'price' => 2600000,
            'real_price' => 2700000,
            'quantity' => 3,
            'category_id' => 21,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'tan-nhiet-nuoc-aio-deepcool-mystique-240',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //47
            'name' => 'RAM PC Kingston Fury Beast Blac 16GB 3200MHz DDR4 KF432C16BB1 16',
            'description' => 'RAM PC Kingston Fury Beast Black 16GB 3200MHz DDR4 KF432C16BB1',
            'price' => 3100000,
            'real_price' => 3200000,
            'quantity' => 2,
            'category_id' => 20,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'ram-pc-kingston-fury-beast-blac-16gb-3200mhz-ddr4-kf432c16bb1-16',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //48
            'name' => 'RAM PC ADATA XPG D50 RGB 16GB 1x16GB 3200MHz DDR4',
            'description' => 'RAM PC ADATA XPG D50 RGB 16GB 1x16GB 3200MHz DDR4',
            'price' => 3000000,
            'real_price' => 3100000,
            'quantity' => 1,
            'category_id' => 20,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'ram-pc-adata-xpg-d50-rgb-16gb-1x16gb-3200mhz-ddr4',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //49
            'name' => 'RAM PC Kingston Fury 8GB 3200MHz KF432C16BB 8',
            'description' => 'RAM PC Kingston Fury 8GB 3200MHz KF432C16BB',
            'price' => 1500000,
            'real_price' => 1600000,
            'quantity' => 2,
            'category_id' => 20,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'ram-pc-kingston-fury-8gb-3200mhz-kf432c16bb-8',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //50
            'name' => 'Case máy tính Xigmatek MYX 3F 3 FAN M ATX',
            'description' => 'Case máy tính Xigmatek MYX 3F 3 FAN M ATX',
            'price' => 1100000,
            'real_price' => 1200000,
            'quantity' => 2,
            'category_id' => 17,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'case-may-tinh-xigmatek-myx-3f-3-fan-m-atx',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //51
            'name' => 'Case máy tính DeepCool Macube 110',
            'description' => 'Case máy tính DeepCool Macube 110',
            'price' => 1400000,
            'real_price' => 1500000,
            'quantity' => 1,
            'category_id' => 17,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'case-may-tinh-deepcool-macube-110',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //52
            'name' => 'Case máy tính MSI MAG FORGE 320R AIRFLOW',
            'description' => 'Case máy tính MSI MAG FORGE 320R AIRFLOW',
            'price' => 1700000,
            'real_price' => 1800000,
            'quantity' => 1,
            'category_id' => 17,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'case-may-tinh-msi-mag-forge-320r-airflow',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //53
            'name' => 'Nguồn máy tính Xigmatek X Power III 650 600W',
            'description' => 'Nguồn máy tính Xigmatek X Power III 650 600W',
            'price' => 1200000,
            'real_price' => 1300000,
            'quantity' => 2,
            'category_id' => 16,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'nguon-may-tinh-xigmatek-x-power-iii-650-600w',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //54
            'name' => 'Nguồn máy tính MSI Mag A650BNL Đen 650W',
            'description' => 'Nguồn máy tính MSI Mag A650BNL Đen 650W',
            'price' => 1300000,
            'real_price' => 1400000,
            'quantity' => 2,
            'category_id' => 16,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'nguon-may-tinh-msi-mag-a650bnl-den-650w',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //55
            'name' => 'Nguồn máy tính Gigabyte P650SS 650W',
            'description' => 'Nguồn máy tính Gigabyte P650SS 650W',
            'price' => 1400000,
            'real_price' => 1500000,
            'quantity' => 1,
            'category_id' => 16,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'nguon-may-tinh-gigabyte-p650ss-650w',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //56
            'name' => 'Mainboard Gigabyte B760M Gaming Plus Wifi D4',
            'description' => 'Mainboard Gigabyte B760M Gaming Plus Wifi D4',
            'price' => 3400000,
            'real_price' => 3500000,
            'quantity' => 3,
            'category_id' => 18,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'mainboard-gigabyte-b760m-gaming-plus-wifi-d4',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //57
            'name' => 'Mainboard Asus TUF Gaming B760M PLUS Wifi D4',
            'description' => 'Mainboard Asus TUF Gaming B760M PLUS Wifi D4',
            'price' => 3500000,
            'real_price' => 3600000,
            'quantity' => 2,
            'category_id' => 18,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'mainboard-asus-tuf-gaming-b760m-plus-wifi-d4',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //58
            'name' => 'Mainboard MSI Pro B760M E DDR4',
            'description' => 'Mainboard MSI Pro B760M E DDR4',
            'price' => 3300000,
            'real_price' => 3400000,
            'quantity' => 2,
            'category_id' => 18,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'mainboard-msi-pro-b760m-e-ddr4',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //59
            'name' => 'VGA Asus Dual Radeon RX 6500 XT OC 4GB DUAL RX6500XT O4G V2',
            'description' => 'VGA Asus Dual Radeon RX 6500 XT OC 4GB DUAL RX6500XT O4G V2',
            'price' => 6400000,
            'real_price' => 6500000,
            'quantity' => 1,
            'category_id' => 22,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'vga-asus-dual-radeon-rx-6500-xt-oc-4gb-dual-rx6500xt-o4g-v2',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //60
            'name' => 'VGA MSI GeForce RTX 3060 VENTUS 2X 12G OC',
            'description' => 'VGA MSI GeForce RTX 3060 VENTUS 2X 12G OC',
            'price' => 11800000,
            'real_price' => 12000000,
            'quantity' => 4,
            'category_id' => 22,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'vga-msi-geforce-rtx-3060-ventus-2x-12g-oc',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //61
            'name' => 'VGA Gigabyte Radeon RX 6500 XT Eagle 4GB GV R65XTEAGLE 4GD',
            'description' => 'VGA Gigabyte Radeon RX 6500 XT Eagle 4GB GV R65XTEAGLE 4GD',
            'price' => 6300000,
            'real_price' => 6400000,
            'quantity' => 3,
            'category_id' => 22,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'vga-gigabyte-radeon-rx-6500-xt-eagle-4gb-gv-r65xteagle-4gd',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //62
            'name' => 'CPU Intel Core i5 12400F',
            'description' => 'CPU Intel Core i5 12400F hiệu năng cao',
            'price' => 4400000,
            'real_price' => 4500000,
            'quantity' => 2,
            'category_id' => 19,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'cpu-intel-core-i5-12400f',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //63
            'name' => 'CPU Intel Core i3 12100F',
            'description' => 'CPU Intel Core i3 12100F',
            'price' => 3100000,
            'real_price' => 3200000,
            'quantity' => 2,
            'category_id' => 19,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'cpu-intel-core-i3-12100f',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //64
            'name' => 'CPU AMD Ryzen 5 5500',
            'description' => 'CPU AMD Ryzen 5 5500',
            'price' => 3900000,
            'real_price' => 4000000,
            'quantity' => 1,
            'category_id' => 19,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'cpu-amd-ryzen-5-5500',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //65
            'name' => 'Bàn phím cơ E DRA không dây EK368L Alpha',
            'description' => 'Bàn phím cơ E DRA không dây EK368L Alpha',
            'price' => 1100000,
            'real_price' => 1200000,
            'quantity' => 3,
            'category_id' => 24,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'cái',
            'slug' => 'ban-phim-co-e-dra-khong-day-ek368l-alpha',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //66
            'name' => 'Bàn phím Gaming MSI Force GK100 RGB Led',
            'description' => 'Bàn phím Gaming MSI Force GK100 RGB Led',
            'price' => 1400000,
            'real_price' => 1500000,
            'quantity' => 2,
            'category_id' => 24,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'cái',
            'slug' => 'ban-phim-gaming-msi-force-gk100-rgb-led',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //67
            'name' => 'Bàn phím có dây Logitech K120',
            'description' => 'Bàn phím có dây Logitech K120',
            'price' => 280000,
            'real_price' => 300000,
            'quantity' => 4,
            'category_id' => 24,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'cái',
            'slug' => 'ban-phim-co-day-logitech-k120',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //68
            'name' => 'Chuột không dây Logitech MX Anywhere 3S',
            'description' => 'Chuột không dây Logitech MX Anywhere 3S',
            'price' => 1400000,
            'real_price' => 1500000,
            'quantity' => 3,
            'category_id' => 25,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'cái',
            'slug' => 'chuot-khong-day-logitech-mx-anywhere-3s',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //69
            'name' => 'Chuột có dây Gaming Logitech G102 LightSync Gen 2',
            'description' => 'Chuột có dây Gaming Logitech G102 LightSync Gen 2',
            'price' => 550000,
            'real_price' => 600000,
            'quantity' => 2,
            'category_id' => 25,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'cái',
            'slug' => 'chuot-co-day-gaming-logitech-g102-lightsync-gen-2',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //70
            'name' => 'Chuột có dây Logitech B100',
            'description' => 'Chuột có dây Logitech B100',
            'price' => 230000,
            'real_price' => 250000,
            'quantity' => 3,
            'category_id' => 25,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'cái',
            'slug' => 'chuot-co-day-logitech-b100',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //71
            'name' => 'Webcam Logitech Brio 100 Graphite',
            'description' => 'Webcam Logitech Brio 100 Graphite chất lượng 4K',
            'price' => 4400000,
            'real_price' => 4500000,
            'quantity' => 1,
            'category_id' => 26,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'webcam-logitech-brio-100-graphite',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //72
            'name' => 'Webcam Rapoo C270L 1080p',
            'description' => 'Webcam Rapoo C270L độ phân giải 1080p',
            'price' => 1100000,
            'real_price' => 1200000,
            'quantity' => 2,
            'category_id' => 26,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'webcam-rapoo-c270l-1080p',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //73
            'name' => 'Webcam Rapoo C280 2K 1440p',
            'description' => 'Webcam Rapoo C280 độ phân giải 2K 1440p',
            'price' => 1700000,
            'real_price' => 1800000,
            'quantity' => 2,
            'category_id' => 26,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'webcam-rapoo-c280-2k-1440p',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //74
            'name' => 'Camera IP 360 độ 8MP EZVIZ H6C G1',
            'description' => 'Camera IP 360 độ 8MP EZVIZ H6C G1',
            'price' => 3400000,
            'real_price' => 3500000,
            'quantity' => 1,
            'category_id' => 27,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'camera-ip-360-do-8mp-ezviz-h6c-g1',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //75
            'name' => 'Camera IP ngoài trời 360 độ 3MP 365 Selection OC1',
            'description' => 'Camera IP ngoài trời 360 độ 3MP 365 Selection OC1',
            'price' => 2700000,
            'real_price' => 2800000,
            'quantity' => 2,
            'category_id' => 27,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'camera-ip-ngoai-troi-360-do-3mp-365-selection-oc1',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //76
            'name' => 'Camera IP EZVIZ H6C Pro 3K 5MP trong nhà 360 độ',
            'description' => 'Camera IP EZVIZ H6C Pro 3K 5MP trong nhà 360 độ',
            'price' => 3900000,
            'real_price' => 4000000,
            'quantity' => 1,
            'category_id' => 27,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'camera-ip-ezviz-h6c-pro-3k-5mp-trong-nha-360-do',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //77
            'name' => 'Đầu ghi Acusense 16 kênh Hikvision DS 7616NXI K1',
            'description' => 'Đầu ghi Acusense 16 kênh Hikvision DS 7616NXI K1',
            'price' => 11800000,
            'real_price' => 12000000,
            'quantity' => 1,
            'category_id' => 28,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'dau-ghi-acusense-16-kenh-hikvision-ds-7616nxi-k1',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //78
            'name' => 'ĐẦU GHI 8 KÊNH EZVIZ CS X5S R100 8W',
            'description' => 'Đầu ghi 8 kênh EZVIZ CS X5S R100 8W',
            'price' => 5800000,
            'real_price' => 6000000,
            'quantity' => 1,
            'category_id' => 28,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'dau-ghi-8-kenh-ezviz-cs-x5s-r100-8w',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //79
            'name' => 'ĐẦU GHI 4 KÊNH EZVIZ CS X5S R100 4W',
            'description' => 'Đầu ghi 4 kênh EZVIZ CS X5S R100 4W',
            'price' => 3400000,
            'real_price' => 3500000,
            'quantity' => 2,
            'category_id' => 28,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'dau-ghi-4-kenh-ezviz-cs-x5s-r100-4w',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //80
            'name' => 'Ổ Cứng Western Digital Purple 6TB 256MB Cache WD64PURZ',
            'description' => 'Ổ cứng Western Digital Purple 6TB 256MB Cache WD64PURZ chuyên dụng cho camera',
            'price' => 4400000,
            'real_price' => 4500000,
            'quantity' => 1,
            'category_id' => 29,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'o-cung-western-digital-purple-6tb-256mb-cache-wd64purz',
            'guarantee' => '3 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //81
            'name' => 'Ổ cứng Seagate Skyhawk 3TB 3 5 ST3000VX009 Chuyên dụng cho Camera',
            'description' => 'Ổ cứng Seagate Skyhawk 3TB 3.5 inch ST3000VX009 chuyên dụng cho camera',
            'price' => 3100000,
            'real_price' => 3200000,
            'quantity' => 2,
            'category_id' => 29,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'o-cung-seagate-skyhawk-3tb-35-st3000vx009-chuyen-dung-cho-camera',
            'guarantee' => '3 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //82
            'name' => 'Thẻ nhớ MicroSD Kingston 64GB Canvas Select Plus 100R A1 C10 SDCS2 64GBSP',
            'description' => 'Thẻ nhớ MicroSD Kingston 64GB Canvas Select Plus 100R A1 C10 SDCS2 64GBSP',
            'price' => 380000,
            'real_price' => 400000,
            'quantity' => 4,
            'category_id' => 29,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'the-nho-microsd-kingston-64gb-canvas-select-plus-100r-a1-c10-sdcs2-64gbsp',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //83
            'name' => 'Máy in Laser đen trắng Canon LBP 6030w In A4 USB Wifi',
            'description' => 'Máy in Laser đen trắng Canon LBP 6030w hỗ trợ in A4, kết nối USB Wifi',
            'price' => 3400000,
            'real_price' => 3500000,
            'quantity' => 1,
            'category_id' => 30,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'may-in-laser-den-trang-canon-lbp-6030w-in-a4-usb-wifi',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //84
            'name' => 'Máy in laser đen trắng HP 108W 4ZB80A In A4 A5 USB WIFI',
            'description' => 'Máy in laser đen trắng HP 108W 4ZB80A hỗ trợ in A4, A5, kết nối USB Wifi',
            'price' => 3100000,
            'real_price' => 3200000,
            'quantity' => 2,
            'category_id' => 30,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'may-in-laser-den-trang-hp-108w-4zb80a-in-a4-a5-usb-wifi',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //85
            'name' => 'Máy in laser đen trắng Canon LBP 243DW In đảo mặt A4 A5 USB LAN WIFI Chính hãng',
            'description' => 'Máy in laser đen trắng Canon LBP 243DW hỗ trợ in đảo mặt A4, A5, kết nối USB LAN Wifi',
            'price' => 4400000,
            'real_price' => 4500000,
            'quantity' => 4,
            'category_id' => 30,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'may-in-laser-den-trang-canon-lbp-243dw-in-dao-mat-a4-a5-usb-lan-wifi-chinh-hang',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //86
            'name' => 'Máy in hóa đơn di động APOS P103',
            'description' => 'Máy in hóa đơn di động APOS P103',
            'price' => 2400000,
            'real_price' => 2500000,
            'quantity' => 1,
            'category_id' => 31,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'may-in-hoa-don-di-dong-apos-p103',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //87
            'name' => 'Màn hình hiển thị QR động thanh toán thông minh TingBox',
            'description' => 'Màn hình hiển thị QR động thanh toán thông minh TingBox',
            'price' => 1700000,
            'real_price' => 1800000,
            'quantity' => 2,
            'category_id' => 31,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'man-hinh-hien-thi-qr-dong-thanh-toan-thong-minh-tingbox',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //88
            'name' => 'Máy quẹt thẻ ngân hàng Mpos nhỏ gọn tiện lợi',
            'description' => 'Máy quẹt thẻ ngân hàng Mpos nhỏ gọn tiện lợi',
            'price' => 2100000,
            'real_price' => 2200000,
            'quantity' => 2,
            'category_id' => 31,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'may-quet-the-ngan-hang-mpos-nho-gon-tien-loi',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //89
            'name' => 'Phần mềm M365 Family English APAC Subscr 1YR Medialess EP2 36878',
            'description' => 'Phần mềm M365 Family English APAC Subscr 1 năm bản quyền',
            'price' => 1400000,
            'real_price' => 1500000,
            'quantity' => 3,
            'category_id' => 32,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'license',
            'slug' => 'phan-mem-m365-family-english-apac-subscr-1yr-medialess-ep2-36878',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //90
            'name' => 'Bkav Pro Internet Security',
            'description' => 'Phần mềm diệt virus Bkav Pro Internet Security',
            'price' => 1100000,
            'real_price' => 1200000,
            'quantity' => 3,
            'category_id' => 32,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'license',
            'slug' => 'bkav-pro-internet-security',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //91
            'name' => 'Phần mềm Microsoft Windows GGWA Windows 11 Pro Legalization Get Genuine',
            'description' => 'Phần mềm Microsoft Windows 11 Pro bản quyền chính hãng',
            'price' => 3400000,
            'real_price' => 3500000,
            'quantity' => 3,
            'category_id' => 32,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'license',
            'slug' => 'phan-mem-microsoft-windows-ggwa-windows-11-pro-legalization-get-genuine',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //92
            'name' => 'Bộ phát wifi 6 Asus RT AX1800HP v2 MU MIMO AX1800Mbps',
            'description' => 'Bộ phát wifi 6 Asus RT AX1800HP v2 MU MIMO AX1800Mbps',
            'price' => 1700000,
            'real_price' => 1800000,
            'quantity' => 3,
            'category_id' => 33,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'bo-phat-wifi-6-asus-rt-ax1800hp-v2-mu-mimo-ax1800mbps',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //93
            'name' => 'Switch 8port TP Link TL SG108E',
            'description' => 'Switch 8 port TP Link TL SG108E',
            'price' => 1100000,
            'real_price' => 1200000,
            'quantity' => 2,
            'category_id' => 33,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'switch-8port-tp-link-tl-sg108e',
            'guarantee' => '2 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //94
            'name' => 'Bộ Test Cáp Mạng Test POE Dò Dây Line Ugreen 10950 cao cấp',
            'description' => 'Bộ Test Cáp Mạng Test POE Dò Dây Line Ugreen 10950 cao cấp',
            'price' => 1100000,
            'real_price' => 1200000,
            'quantity' => 2,
            'category_id' => 33,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'bo-test-cap-mang-test-poe-do-day-line-ugreen-10950-cao-cap',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //95
            'name' => 'Tai nghe Razer BlackShark V2 X USB',
            'description' => 'Tai nghe Razer BlackShark V2 X USB chất lượng âm thanh tốt',
            'price' => 1700000,
            'real_price' => 1800000,
            'quantity' => 2,
            'category_id' => 35,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'cái',
            'slug' => 'tai-nghe-razer-blackshark-v2-x-usb',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //96
            'name' => 'Tai nghe HyperX Cloud III Wireless Black Red',
            'description' => 'Tai nghe HyperX Cloud III Wireless Black Red không dây',
            'price' => 3100000,
            'real_price' => 3200000,
            'quantity' => 2,
            'category_id' => 35,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'cái',
            'slug' => 'tai-nghe-hyperx-cloud-iii-wireless-black-red',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //97
            'name' => 'Tai nghe Razer BlackShark V3 Pro Black',
            'description' => 'Tai nghe Razer BlackShark V3 Pro Black chất lượng cao',
            'price' => 4400000,
            'real_price' => 4500000,
            'quantity' => 1,
            'category_id' => 35,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'cái',
            'slug' => 'tai-nghe-razer-blackshark-v3-pro-black',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //98
            'name' => 'Loa Thonet & Vander Vertrag Bluetooth Woodskin',
            'description' => 'Loa Thonet & Vander Vertrag Bluetooth Woodskin',
            'price' => 2100000,
            'real_price' => 2200000,
            'quantity' => 3,
            'category_id' => 34,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'cái',
            'slug' => 'loa-thonet-vander-vertrag-bluetooth-woodskin',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //99
            'name' => 'Loa Edifier MR3 2 0 Bluetooth Black',
            'description' => 'Loa Edifier MR3 2.0 Bluetooth màu đen',
            'price' => 1400000,
            'real_price' => 1500000,
            'quantity' => 4,
            'category_id' => 34,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'cái',
            'slug' => 'loa-edifier-mr3-2-0-bluetooth-black',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //100
            'name' => 'Loa Edifier G1500 MAX 2.1',
            'description' => 'Loa Edifier G1500 MAX 2.1',
            'price' => 1700000,
            'real_price' => 1800000,
            'quantity' => 3,
            'category_id' => 34,
            'status' => 'in_stock',
            'outline' => 1,
            'unit' => 'cái',
            'slug' => 'loa-edifier-g1500-max-2-1',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Product::create([ //101
            'name' => 'USB Lexar JumpDrive D400 64GB USB C LJDD400064G BNQNG',
            'description' => 'USB Lexar JumpDrive D400 64GB USB C LJDD400064G BNQNG',
            'price' => 380000,
            'real_price' => 400000,
            'quantity' => 5,
            'category_id' => 36,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'usb-lexar-jumpdrive-d400-64gb-usb-c-ljdd400064g-bnqng',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //102
            'name' => 'Ổ cứng di động HDD WD Elements Portable 6TB 2 5 USB 3 0 WDBHJS0060BBK WESN Đen',
            'description' => 'Ổ cứng di động HDD WD Elements Portable 6TB 2.5 inch USB 3.0 WDBHJS0060BBK WESN màu đen',
            'price' => 3400000,
            'real_price' => 3500000,
            'quantity' => 2,
            'category_id' => 36,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'o-cung-di-dong-hdd-wd-elements-portable-6tb-25-usb-30-wdbhjs0060bbk-wesn-den',
            'guarantee' => '3 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //103
            'name' => 'Box ổ cứng SSD M2 hỗ trợ NVME SATA USB Type C 3 2 GEN2 tốc độ 10Gbps Ugreen 90264',
            'description' => 'Box ổ cứng SSD M2 hỗ trợ NVME SATA USB Type C 3.2 GEN2 tốc độ 10Gbps Ugreen 90264',
            'price' => 680000,
            'real_price' => 700000,
            'quantity' => 3,
            'category_id' => 36,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'box-o-cung-ssd-m2-ho-tro-nvme-sata-usb-type-c-32-gen2-toc-do-10gbps-ugreen-90264',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //104
            'name' => 'Thẻ nhớ SanDisk Ultra 64GB MicroSDXC C10 UHS 1 100MB s SDSQUNR 064G GN3MN',
            'description' => 'Thẻ nhớ SanDisk Ultra 64GB MicroSDXC C10 UHS 1 100MB/s SDSQUNR 064G GN3MN',
            'price' => 380000,
            'real_price' => 400000,
            'quantity' => 5,
            'category_id' => 37,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'the-nho-sandisk-ultra-64gb-microsdxc-c10-uhs-1-100mb-s-sdsqunr-064g-gn3mn',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //105
            'name' => 'Thẻ nhớ Micro SD HIKSEMI NEO 64GB',
            'description' => 'Thẻ nhớ Micro SD HIKSEMI NEO 64GB',
            'price' => 330000,
            'real_price' => 350000,
            'quantity' => 4,
            'category_id' => 37,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'the-nho-micro-sd-hiksemi-neo-64gb',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //106
            'name' => 'Thẻ nhớ Micro SD Samsung EVO Plus 64GB',
            'description' => 'Thẻ nhớ Micro SD Samsung EVO Plus 64GB',
            'price' => 380000,
            'real_price' => 400000,
            'quantity' => 4,
            'category_id' => 37,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'the-nho-micro-sd-samsung-evo-plus-64gb',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //107
            'name' => 'Cáp HDMI 1 4 dài 50m Ugreen',
            'description' => 'Cáp HDMI 1.4 dài 50m Ugreen',
            'price' => 1150000,
            'real_price' => 1200000,
            'quantity' => 2,
            'category_id' => 38,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'cap-hdmi-1-4-dai-50m-ugreen',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //108
            'name' => 'Cáp VGA tròn Vention VAG B04 B1000 10m',
            'description' => 'Cáp VGA tròn Vention VAG B04 B1000 dài 10m',
            'price' => 330000,
            'real_price' => 350000,
            'quantity' => 3,
            'category_id' => 38,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'cap-vga-tron-vention-vag-b04-b1000-10m',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //109
            'name' => 'Cáp dữ liệu AV 3 5mm truyền âm thanh dài 5M Ugreen',
            'description' => 'Cáp dữ liệu AV 3.5mm truyền âm thanh dài 5m Ugreen',
            'price' => 230000,
            'real_price' => 250000,
            'quantity' => 4,
            'category_id' => 38,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'cap-du-lieu-av-3-5mm-truyen-am-thanh-dai-5m-ugreen',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //110
            'name' => 'Balo Laptop Acer Gaming Suv',
            'description' => 'Balo Laptop Acer Gaming Suv',
            'price' => 650000,
            'real_price' => 700000,
            'quantity' => 5,
            'category_id' => 39,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'balo-laptop-acer-gaming-suv',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //111
            'name' => 'Balo laptop Kmore Micah Backpack',
            'description' => 'Balo laptop Kmore Micah Backpack',
            'price' => 600000,
            'real_price' => 650000,
            'quantity' => 4,
            'category_id' => 39,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'balo-laptop-kmore-micah-backpack',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //112
            'name' => 'Túi đựng laptop Sakos Handy SVC002N',
            'description' => 'Túi đựng laptop Sakos Handy SVC002N',
            'price' => 380000,
            'real_price' => 400000,
            'quantity' => 3,
            'category_id' => 39,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'tui-dung-laptop-sakos-handy-svc002n',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //113
            'name' => 'Giá đỡ Laptop S Case hợp kim nhôm đa năng cao cấp xám',
            'description' => 'Giá đỡ Laptop S Case hợp kim nhôm đa năng cao cấp màu xám',
            'price' => 320000,
            'real_price' => 350000,
            'quantity' => 4,
            'category_id' => 40,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'gia-do-laptop-s-case-hop-kim-nhom-da-nang-cao-cap-xam',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //114
            'name' => 'Giá đỡ Laptop Macbook S Case hộp kim nhôm đa năng cao cấp Bạc',
            'description' => 'Giá đỡ Laptop Macbook S Case hợp kim nhôm đa năng cao cấp màu bạc',
            'price' => 320000,
            'real_price' => 350000,
            'quantity' => 3,
            'category_id' => 40,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'gia-do-laptop-macbook-s-case-hop-kim-nhom-da-nang-cao-cap-bac',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //115
            'name' => 'Giá đỡ Laptop Hyper Stand Folding Alunium HTU6',
            'description' => 'Giá đỡ Laptop Hyper Stand Folding Alunium HTU6',
            'price' => 380000,
            'real_price' => 400000,
            'quantity' => 3,
            'category_id' => 40,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'cái',
            'slug' => 'gia-do-laptop-hyper-stand-folding-alunium-htu6',
            'guarantee' => '1 năm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //116
            'name' => 'Bộ vệ sinh Laptop 6 món',
            'description' => 'Bộ vệ sinh Laptop 6 món gồm dung dịch và dụng cụ vệ sinh',
            'price' => 130000,
            'real_price' => 150000,
            'quantity' => 2,
            'category_id' => 41,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'bộ',
            'slug' => 'bo-ve-sinh-laptop-6-mon',
            'guarantee' => '6 tháng',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([ //117
            'name' => 'Bộ vệ sinh Laptop Pro 10 món',
            'description' => 'Bộ vệ sinh Laptop Pro 10 món chuyên nghiệp',
            'price' => 230000,
            'real_price' => 250000,
            'quantity' => 3,
            'category_id' => 41,
            'status' => 'in_stock',
            'outline' => 0,
            'unit' => 'bộ',
            'slug' => 'bo-ve-sinh-laptop-pro-10-mon',
            'guarantee' => '6 tháng',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // hết hàng
        Product::create([
            'name' => 'Laptop Dell Vostro 3520 5M2TT2',
            'description' => 'Laptop Dell Vostro 3520 5M2TT2 là dòng laptop sinh viên sở hữu thiết kế mỏng nhẹ với nhiều tính năng nổi bật giúp bạn nâng cao thành tích học tập, tăng thêm trải nghiệm với các tựa game mình yêu thích',
            'price' => 17500000,
            'real_price' => 18900000,
            'quantity' => 0,
            'category_id' => 1,
            'status' => 'out_stock',
            'outline' => 1,
            'unit' => 'chiếc',
            'slug' => 'laptop-dell-vostro-3520-5m2tt2',
            'guarantee' => '2 năm',
            'rating_avg' => 0,
            'rating_count' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
