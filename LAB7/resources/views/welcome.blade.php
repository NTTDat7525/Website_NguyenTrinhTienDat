@extends('layouts.master')

@section('title', 'Trang chủ - Welcome')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">👋 Thông tin sinh viên</h4>
            </div>
            <div class="card-body">
                {{-- Bài 1: Hiển thị dữ liệu truyền từ Controller --}}
                <h2 class="text-primary">
                    Xin chào <strong>{{ $data['name'] }}</strong>, {{ $data['age'] }} tuổi
                </h2>
                <hr>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <span class="fw-bold">👤 Họ tên:</span> {{ $data['name'] }}
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">🎂 Tuổi:</span> {{ $data['age'] }}
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">🏫 Trường:</span> {{ $data['school'] }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
