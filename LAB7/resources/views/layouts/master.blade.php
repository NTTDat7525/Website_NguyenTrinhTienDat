<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
        footer {
            background-color: #343a40;
            color: #adb5bd;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.4rem;
        }
    </style>
    @stack('styles')
</head>
<body>

    {{-- ===== HEADER / NAVBAR ===== --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">🚀 Laravel App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') || request()->is('home') ? 'active' : '' }}"
                           href="/home">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('products') ? 'active' : '' }}"
                           href="/products">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                           href="/contact">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('bang-cuu-chuong/*') ? 'active' : '' }}"
                           href="/bang-cuu-chuong/5">Cửu chương</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- ===== NỘI DUNG CHÍNH (mỗi trang con sẽ điền vào đây) ===== --}}
    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    {{-- ===== FOOTER ===== --}}
    <footer class="py-4 mt-auto">
        <div class="container text-center">
            <p class="mb-1">© {{ date('Y') }} Laravel App — Bản quyền thuộc về <strong>Nguyen Van A</strong></p>
            <small>Được xây dựng bằng Laravel & Bootstrap 5</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
