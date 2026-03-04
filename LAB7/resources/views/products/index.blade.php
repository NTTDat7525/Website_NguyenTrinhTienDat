@extends('layouts.master')

@section('title', 'Danh sách sản phẩm')

@section('content')
<div class="row">
    <div class="col-12">
        <h2 class="mb-4">🛒 Danh sách sản phẩm</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th class="text-end">Giá bán</th>
                        <th class="text-center">Phân loại</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Bài 2: @foreach duyệt mảng sản phẩm --}}
                    @foreach ($products as $index => $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                {{ $product['name'] }}
                                {{-- Nếu giá > 10 triệu thì thêm badge VIP --}}
                                @if ($product['price'] > 10000000)
                                    <span class="badge bg-danger ms-1">⭐ VIP</span>
                                @endif
                            </td>
                            {{-- Bài 2: Dùng toán tử 3 ngôi để đổi màu giá --}}
                            <td class="text-end fw-bold {{ $product['price'] > 10000000 ? 'text-danger' : 'text-success' }}">
                                {{ number_format($product['price'], 0, ',', '.') }} đ
                            </td>
                            <td class="text-center">
                                {{-- Dùng @if kiểm tra điều kiện --}}
                                @if ($product['price'] > 10000000)
                                    <span class="badge bg-danger">Cao cấp (VIP)</span>
                                @else
                                    <span class="badge bg-success">Phổ thông</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <p class="text-muted">
            Tổng cộng: <strong>{{ count($products) }}</strong> sản phẩm.
            Sản phẩm <span class="text-danger fw-bold">màu đỏ</span> có giá trên 10 triệu.
        </p>
    </div>
</div>
@endsection
