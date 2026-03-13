<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('categories')->insert([
            ['name' => 'Điện thoại', 'description' => 'Các loại điện thoại di động'],
            ['name' => 'Laptop', 'description' => 'Máy tính xách tay'],
            ['name' => 'Tablet', 'description' => 'Máy tính bảng'],
            ['name' => 'Phụ kiện', 'description' => 'Phụ kiện công nghệ'],
            ['name' => 'Đồng hồ', 'description' => 'Đồng hồ thông minh và cơ'],
        ]);
    }
}
