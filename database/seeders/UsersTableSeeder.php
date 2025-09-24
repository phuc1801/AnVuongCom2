<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use function Symfony\Component\Clock\now;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Nguyen Van Anh',
            'email' => 'vananh@gmail.com',
            'status' => 'active',
            'password' => bcrypt('12345678a@A'),
            'phone' => '0385462917',
            'avatar' => 'avatar-cute-3.jpg',
            'address' => 'Tân Nam, An Lão, Hải Phòng',
            'birthday' => '1990-01-01',
            'role_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        User::create([
            'name' => 'Dao Thi Binh',
            'email' => 'daobinh@gmail.com',
            'status' => 'active',
            'password' => bcrypt('12345678b@B'),
            'phone' => '0856293740',
            'avatar' => 'avatar-cute-4.jpg',
            'address' => 'Tân Đông, An Bài, Hải Phòng',
            'birthday' => '1992-05-15',
            'role_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        User::create([
            'name' => 'Cu Duc Hai',
            'email' => 'duchai@gmail.com',
            'status' => 'pending',
            'password' => bcrypt('12345678c@C'),
            'phone' => '0123456787',
            'avatar' => 'avatar-cute-5.jpg',
            'address' => 'Tân Tây, An Na, Hải Phòng',
            'birthday' => '1995-10-20',
            'role_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        User::create([
            'name' => 'Tran Trung Hieu',
            'email' => 'trunghieu@gmail.com',
            'status' => 'pending',
            'password' => bcrypt('12345678Staff@'),
            'phone' => '0123456783',
            'avatar' => 'avatar-cute-2.jpg',
            'address' => 'Tân Trang, An Ni, Hải Phòng',
            'role_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        User::create([
            'name' => 'Dang Thu Ha',
            'email' => 'thuha@gmail.com',
            'status' => 'deleted',
            'password' => bcrypt('12345678Dang@'),
            'phone' => '0123456784',
            'avatar' => 'avatar-cute-6.jpg',
            'address' => 'Tân Trang, An Ni, Hải Phòng',
            'role_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        User::create([
            'name' => 'Tran Trung Khanh',
            'email' => 'khanhtran@gmail.com',
            'status' => 'banned',
            'password' => bcrypt('12345678Tran@'),
            'phone' => '0123456784',
            'avatar' => 'avatar-cute-7.jpg',
            'address' => 'Tân Trang, An Ni, Hải Phòng',
            'role_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
