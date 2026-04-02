<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Bài 1: Hàm index - Truyền dữ liệu sang View
     */
    public function index()
    {
        $data = [
            'name'   => 'Nguyen Van A',
            'age'    => 20,
            'school' => 'Đại học CNTT',
        ];

        return view('welcome', compact('data'));
    }

    /**
     * Bài 4: Bảng cửu chương
     */
    public function multiplication($n)
    {
        // Kiểm tra $n có phải số nguyên hợp lệ (1-9) không
        $isValid = is_numeric($n) && (int)$n == $n && $n >= 1 && $n <= 9;

        return view('multiplication', compact('n', 'isValid'));
    }
}
