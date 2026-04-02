<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Bài 2: Danh sách sản phẩm
     */
    public function list()
    {
        $products = [
            ['name' => 'iPhone 15 Pro Max',    'price' => 33990000],
            ['name' => 'Samsung Galaxy S24',   'price' => 22990000],
            ['name' => 'Tai nghe Sony WH-1000XM5', 'price' => 8490000],
            ['name' => 'MacBook Air M2',        'price' => 28990000],
            ['name' => 'Chuột Logitech MX Master 3', 'price' => 2490000],
            ['name' => 'iPad Pro 12.9"',        'price' => 25990000],
            ['name' => 'Bàn phím Keychron K2',  'price' => 1990000],
        ];

        return view('products.index', compact('products'));
    }
}
