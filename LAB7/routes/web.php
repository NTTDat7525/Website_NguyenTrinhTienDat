<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Bài 1: Route trang chủ → HomeController@index
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Bài 2: Route danh sách sản phẩm → ProductController@list
|--------------------------------------------------------------------------
*/
Route::get('/products', [ProductController::class, 'list']);

/*
|--------------------------------------------------------------------------
| Bài 3: Route test Master Layout (home & contact)
|--------------------------------------------------------------------------
*/
Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

/*
|--------------------------------------------------------------------------
| Bài 4: Route bảng cửu chương với tham số {n}
|--------------------------------------------------------------------------
*/
Route::get('/bang-cuu-chuong/{n}', [HomeController::class, 'multiplication']);
