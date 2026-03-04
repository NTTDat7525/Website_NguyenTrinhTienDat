@extends('layouts.master')

@section('title', 'Trang chủ')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="jumbotron bg-light p-5 rounded-3 border">
            <h1 class="display-5 fw-bold">🏠 Chào mừng đến trang chủ!</h1>
            <p class="col-md-8 fs-5 text-muted">
                Đây là trang chủ sử dụng Master Layout. Header và Footer được tự động kế thừa
                từ <code>layouts/master.blade.php</code> — không cần copy code!
            </p>
            <hr class="my-4">
            <p>Khám phá các tính năng của ứng dụng Laravel này.</p>
            <div class="d-flex gap-2">
                <a href="/products" class="btn btn-primary btn-lg">🛒 Xem sản phẩm</a>
                <a href="/bang-cuu-chuong/5" class="btn btn-outline-secondary btn-lg">📐 Bảng cửu chương</a>
                <a href="/contact" class="btn btn-outline-dark btn-lg">📬 Liên hệ</a>
            </div>
        </div>

        <div class="row mt-4 g-3">
            <div class="col-md-4">
                <div class="card text-center h-100 shadow-sm">
                    <div class="card-body">
                        <div class="display-4">🎯</div>
                        <h5 class="card-title mt-2">Controller</h5>
                        <p class="card-text text-muted">Logic xử lý tập trung trong Controller, tách biệt khỏi View.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center h-100 shadow-sm">
                    <div class="card-body">
                        <div class="display-4">🗂️</div>
                        <h5 class="card-title mt-2">Blade Template</h5>
                        <p class="card-text text-muted">Hệ thống template mạnh mẽ với @extends, @yield, @section.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center h-100 shadow-sm">
                    <div class="card-body">
                        <div class="display-4">🛣️</div>
                        <h5 class="card-title mt-2">Routing</h5>
                        <p class="card-text text-muted">Định tuyến linh hoạt với tham số động và named routes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
