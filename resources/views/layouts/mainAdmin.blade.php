<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik IT Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- CSS -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo text-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Klinik IT" width="100">
        </div>
        <ul>
            <li>
                <a href="/admin/dashboard">
                    <i class="fas fa-home"></i>
                    Dashboard
                </a>
            </li>
            <li class="has-submenu">
                <a href="#tokoSubmenu" data-bs-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-store"></i>
                    Toko
                    <i class="fas fa-chevron-down arrow"></i>
                </a>
                <ul class="collapse submenu" id="tokoSubmenu">
                    <li>
                        <a href="/admin/toko/pesanan">
                            <i class="fas fa-shopping-cart"></i>
                            Daftar Pesanan
                        </a>
                    </li>
                    <li>
                        <a href="/admin/toko/stok">
                            <i class="fas fa-boxes"></i>
                            Daftar Stok
                        </a>
                    </li>
                    <li>
                        <a href="/admin/toko/spesifikasi">
                            <i class="fa-solid fa-list"></i>
                            Spesifikasi Produk
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-submenu">
                <a href="#layananSubmenu" data-bs-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-tools"></i>
                    Layanan
                    <i class="fas fa-chevron-down arrow"></i>
                </a>
                <ul class="collapse submenu" id="layananSubmenu">
                    <li>
                        <a href="/servis/instalasi-software">
                            <i class="fas fa-download"></i>
                            Instalasi Software
                        </a>
                    </li>
                    <li>
                        <a href="/servis/instalasi-jaringan">
                            <i class="fas fa-network-wired"></i>
                            Instalasi Jaringan
                        </a>
                    </li>
                    <li>
                        <a href="/servis/service-komputer">
                            <i class="fas fa-desktop"></i>
                            Service Komputer
                        </a>
                    </li>
                    <li>
                        <a href="/servis/service-laptop">
                            <i class="fas fa-laptop"></i>
                            Service Notebook / Laptop
                        </a>
                    </li>
                    <li>
                        <a href="/servis/perakitan-instalasi-komputer">
                            <i class="fas fa-microchip"></i>
                            Perakitan dan Instalasi Komputer
                        </a>
                    </li>
                    <li>
                        <a href="/servis/daftar-chat">
                            <i class="fas fa-comment"></i>
                            Daftar Chat
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header">
            <div class="logo-title">
                <h1>KLINIK IT SOLUTION</h1>
            </div>
            <button class="btn btn-outline-secondary">
                <i class="fas fa-user-circle"></i> Admin
            </button>
        </div>

        <!-- Main Content -->
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js -->
    <script>
        mix.js('resources/js/app.js', 'public/js')
            .sass('resources/sass/app.scss', 'public/css')
            .css('resources/css/admin.css', 'public/css');
    </script>
</body>
</html>
