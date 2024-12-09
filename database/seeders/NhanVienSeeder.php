<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nhan_viens')->delete();
        DB::table('nhan_viens')->truncate();
        DB::table('nhan_viens')->insert([
            [
                'ma_nhan_vien'      =>  'NV00001',
                'ho_va_ten'         =>  'Hồ Minh Tùng',
                'ngay_sinh'         =>  '2000-01-01',
                'luong_co_ban'      =>  '10000000',
                'id_chuc_vu'        =>  '1',
                'ngay_bat_dau'      => '2024-01-01',
                'so_dien_thoai'     =>  '0905.523.543',
                'email'             =>  'tungho.mth@gmail.com',
                'password'          =>  bcrypt('123456'),
                'tinh_trang'        =>  1,
                'avatar'            =>  'https://cellphones.com.vn/sforum/wp-content/uploads/2024/02/anh-avatar-cute-100.jpg',
            ],
        ]);
    }
}
