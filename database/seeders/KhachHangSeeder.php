<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('khach_hangs')->delete();
        DB::table('khach_hangs')->truncate();
        DB::table('khach_hangs')->insert([
            [
                'ho_lot'        =>  'Hồ Minh',
                'ten'           =>  'Tùng',
                'email'         =>  'tungho.mth@gmail.com',
                'so_dien_thoai' =>  '0935303721',
                'password'      =>  bcrypt('123456'),
                'ngay_sinh'     =>  '2005-01-01',
                'is_active'     =>  1,
            ],
        ]);
    }
}
