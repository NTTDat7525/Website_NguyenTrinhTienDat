@extends('layouts.master')

@section('title', 'Bảng cửu chương ' . ($isValid ? "số $n" : ''))

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="mb-4">📐 Bảng cửu chương</h2>

        {{-- Bài 4: Kiểm tra tính hợp lệ của $n --}}
        @if (!$isValid)
            {{-- Hiển thị Alert Bootstrap nếu không hợp lệ --}}
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>⚠️ Lỗi!</strong>
                Giá trị <code>{{ $n }}</code> không hợp lệ.
                Vui lòng nhập một số nguyên từ <strong>1 đến 9</strong>.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="text-center mt-3">
                <p>Thử với các bảng cửu chương hợp lệ:</p>
                <div class="d-flex flex-wrap gap-2 justify-content-center">
                    @for ($i = 1; $i <= 9; $i++)
                        <a href="/bang-cuu-chuong/{{ $i }}" class="btn btn-outline-primary">
                            Bảng {{ $i }}
                        </a>
                    @endfor
                </div>
            </div>
        @else
            {{-- Hiển thị bảng cửu chương hợp lệ --}}
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Bảng cửu chương số {{ $n }}</h4>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped table-hover mb-0">
                        <thead class="table-secondary">
                            <tr>
                                <th class="text-center">Phép tính</th>
                                <th class="text-center">Kết quả</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Bài 4: Dùng @for để in bảng cửu chương --}}
                            @for ($i = 1; $i <= 10; $i++)
                                <tr>
                                    <td class="text-center fs-5">
                                        {{ $n }} × {{ $i }}
                                    </td>
                                    <td class="text-center fs-5 fw-bold text-primary">
                                        = {{ $n * $i }}
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Nút chuyển bảng cửu chương --}}
            <div class="mt-3">
                <p class="text-muted">Xem bảng khác:</p>
                <div class="d-flex flex-wrap gap-2">
                    @for ($i = 1; $i <= 9; $i++)
                        <a href="/bang-cuu-chuong/{{ $i }}"
                           class="btn {{ $i == $n ? 'btn-primary' : 'btn-outline-primary' }} btn-sm">
                            Bảng {{ $i }}
                        </a>
                    @endfor
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
