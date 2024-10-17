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
                <a href="../admin/dashboard">
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
                        <a href="/toko/pesanan">
                            <i class="fas fa-shopping-cart"></i>
                            Daftar Pesanan
                        </a>
                    </li>
                    <li>
                        <a href="/toko/stok">
                            <i class="fas fa-boxes"></i>
                            Daftar Stok
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-tools"></i>
                    Service
                </a>
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
            <button><i class="fas fa-user-circle"></i> Admin</button>
        </div>

        <!-- Main Content -->
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        mix.js('resources/js/app.js', 'public/js')
            .sass('resources/sass/app.scss', 'public/css')
            .css('resources/css/admin.css', 'public/css');
    </script>
    {{-- <script>
        // Chart 1: Persentase User
        const ctx1 = document.getElementById('userPercentageChart').getContext('2d');
        const userPercentageChart = new Chart(ctx1, {
            type: 'pie',
            data: {
                labels: ['User 1', 'User 2', 'User 3', 'User 4'],
                datasets: [{
                    label: 'Persentase User',
                    data: [40, 30, 20, 10],
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0'],
                    hoverOffset: 4
                }]
            },
        });

        // Chart 2: Persentase User Melakukan Interaksi
        const ctx2 = document.getElementById('interactionChart').getContext('2d');
        const interactionChart = new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: ['Interaksi 1', 'Interaksi 2', 'Interaksi 3', 'Interaksi 4'],
                datasets: [{
                    label: 'Persentase Interaksi',
                    data: [50, 25, 15, 10],
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0'],
                    hoverOffset: 4
                }]
            },
        });
    </script> --}}
</body>
</html>