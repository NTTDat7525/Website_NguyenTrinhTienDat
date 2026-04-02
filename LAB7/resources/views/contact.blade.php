@extends('layouts.master')

@section('title', 'Liên hệ')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h2 class="mb-4">📬 Liên hệ với chúng tôi</h2>

        <div class="row g-4">
            {{-- Thông tin liên hệ --}}
            <div class="col-md-5">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title text-primary">📍 Thông tin</h5>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2">
                                <strong>👤 Sinh viên:</strong> Nguyen Van A
                            </li>
                            <li class="mb-2">
                                <strong>🏫 Trường:</strong> Đại học CNTT
                            </li>
                            <li class="mb-2">
                                <strong>📧 Email:</strong> nguyenvana@uit.edu.vn
                            </li>
                            <li class="mb-2">
                                <strong>📞 Điện thoại:</strong> 0900 000 000
                            </li>
                            <li class="mb-2">
                                <strong>🌐 Website:</strong> laravel-app.test
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Form liên hệ --}}
            <div class="col-md-7">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">✉️ Gửi tin nhắn</h5>
                        <div class="mb-3">
                            <label class="form-label">Họ tên</label>
                            <input type="text" class="form-control" placeholder="Nhập họ tên của bạn">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="email@example.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nội dung</label>
                            <textarea class="form-control" rows="4" placeholder="Nhập nội dung..."></textarea>
                        </div>
                        <button class="btn btn-primary w-100">🚀 Gửi tin nhắn</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Ghi chú về Master Layout --}}
        <div class="alert alert-info mt-4">
            <strong>📌 Ghi chú Bài 3:</strong> Trang này dùng <code>@extends('layouts.master')</code>.
            Header và Footer xuất hiện tự động mà <strong>không cần copy code HTML</strong> vào mỗi trang!
        </div>
    </div>
</div>
@endsection
