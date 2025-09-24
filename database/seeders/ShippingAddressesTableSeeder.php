<?php

namespace Database\Seeders;

use App\Models\ShippingAddress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShippingAddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ShippingAddress::create([
            'user_id' => 2,
            'address' => 'Tân Nam, An Lão, Hải Phòng',
            'name' => 'Nguyễn Văn Ánh',
            'phone' => '0385462917',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ShippingAddress::create([
            'user_id' => 3,
            'address' => 'Tân Đông, An Bài, Hải Phòng',
            'name' => 'Đào Thị Bình',
            'phone' => '0856293740',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ShippingAddress::create([
            'user_id' => 2,
            'address' => 'Lạch Tray, Ngô Quyền, Hải Phòng',
            'name' => 'Phạm Văn Lĩnh',
            'phone' => '0912874635',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ShippingAddress::create([
            'user_id' => 3,
            'address' => 'Quang Trung, An Lão, Hải Phòng',
            'name' => 'Lê Thị Mận',
            'phone' => '0798362514',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ShippingAddress::create([
            'user_id' => 2,
            'address' => 'Ka Long, Móng Cái, Quảng Ninh  ',
            'name' => 'Hoàng Đức Nam',
            'phone' => '0934712856',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
