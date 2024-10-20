<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Checkout - Klinik IT Solution')</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #ccc;
            padding: 20px;
            text-align: left;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header img {
            height: 50px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        .main-content {
            padding: 20px;
        }

        .product-image {
            width: 100px;
            height: auto;
        }
        .summary-table th, .summary-table td {
            vertical-align: middle;
        }
        .total-price-summary {
            font-weight: bold;
            color: #6a1b9a;
        }

        .checkout-btn {
            background-color: #6a1b9a;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        .checkout-btn:hover {
            background-color: #4a148c;
        }
        .user-location {
            background-color: #e0e0e0;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="header-left">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo Klinik IT" height="80"> CHECKOUT
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content container">
        <!-- Tombol Kembali ke Halaman Toko -->
        <div class="mb-3">
            <a href="/toko" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
        <!-- Informasi Lokasi Pengguna -->
        <div class="user-location">
            <h4>Informasi Pengiriman</h4>
            <p><strong>Nama Penerima:</strong> Muhammad Nur Fadhillah</p>
            <p><strong>Alamat:</strong> Jl. Flamboyan</p>
            <p><strong>Kota:</strong> Banjarmasin</p>
            <p><strong>Provinsi:</strong> Kalimantan Selatan</p>
            <p><strong>Kode Pos:</strong> 70123</p>
        </div>
        <!-- Ringkasan Pesanan -->
        <h2>Ringkasan Pesanan</h2>
        <table class="table summary-table">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="../img/1.jpg" class="product-image" alt="Produk 1"><br>Xiaomi RedmiBook 15</td>
                    <td>Laptop Xiaomi RedmiBook 15 intel i3-1115G4 Ram 8GB + SSD 256GB W10 - Non Bundling</td>
                    <td>Rp. 4.919.000</td>
                    <td>1</td>
                    <td>Rp. 4.919.000</td>
                </tr>
                <tr>
                    <td><img src="../img/2.jpg" class="product-image" alt="Produk 2"><br>Lenovo Thinkpad X220</td>
                    <td>Lenovo Thinkpad Laptop X220 Core i5 Ram 4/8GB HDD 320/256GB Murah - X220I I3 GEN2</td>
                    <td>Rp. 1.390.000</td>
                    <td>1</td>
                    <td>Rp. 1.390.000</td>
                </tr>
                <tr>
                    <td><img src="../img/3.jpg" class="product-image" alt="Produk 3"><br>Apple Macbook Air M1</td>
                    <td>(RESMI IBOX) Apple MacBook Air M1 Chip 2020 256GB 8GB Garansi resmi - silver</td>
                    <td>Rp. 12.449.000</td>
                    <td>1</td>
                    <td>Rp. 12.449.000</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class ="text-right">Total:</td>
                    <td class="total-price-summary">Rp. 18.758.000</td>
                </tr>
            </tfoot>
        </table>
        <!-- Tombol Buat Pesanan -->
        <button class="checkout-btn" onclick="location.href='#'">Buat Pesanan</button>

    </div>
</body>
</html>