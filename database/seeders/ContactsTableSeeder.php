<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Liên hệ #1: Khách hàng hỏi về sản phẩm
        Contact::create([
            'name'       => 'Nguyễn Văn A',
            'phone'      => '0912345678',
            'email'      => 'vana@example.com',
            'message'    => 'Tôi muốn hỏi về giá của laptop Dell Inspiron.',
            'is_replied' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Liên hệ #2: Khách hàng để lại email
        Contact::create([
            'name'       => 'Trần Thị B',
            'phone'      => null,
            'email'      => 'tranb@example.com',
            'message'    => 'Cho tôi xin báo giá chi tiết các dòng PC Gaming.',
            'is_replied' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Liên hệ #3: Khách để lại số điện thoại
        Contact::create([
            'name'       => 'Lê Văn C',
            'phone'      => '0987654321',
            'email'      => null,
            'message'    => 'Tôi cần hỗ trợ bảo hành sản phẩm.',
            'is_replied' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Liên hệ #4: Khách hàng hỏi qua form web
        Contact::create([
            'name'       => 'Phạm Thị D',
            'phone'      => '0971234567',
            'email'      => 'phamd@example.com',
            'message'    => 'Shop có nhận sửa chữa laptop không?',
            'is_replied' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Liên hệ #5: Khách hỏi về phụ kiện
        Contact::create([
            'name'       => 'Hoàng Văn E',
            'phone'      => '0909123456',
            'email'      => 'hoange@example.com',
            'message'    => 'Cho tôi hỏi cửa hàng có bán RAM laptop không?',
            'is_replied' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
