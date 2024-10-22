<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Klinik IT Solution</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        .header {
            background-color: #3a1078;
            padding: 15px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
        }
        .header img {
            height: 60px;
        }
        .header h1 {
            color: #fff;
            font-size: 24px;
            margin-left: 15px;
        }
        .main-content {
            padding: 30px 0;
        }
        .card {
            border: none;
            box-shadow: 0 0 20px rgba(0,0,0,.08);
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
        }
        .card-header {
            background-color: #4e31aa;
            color: #fff;
            font-weight: bold;
        }
        .user-location {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,.08);
            margin-bottom: 20px;
        }
        .product-image {
            width: 80px;
            border-radius: 5px;
            transition: transform 0.3s ease;
        }
        .product-image:hover {
            transform: scale(1.1);
        }
        .summary-table th, .summary-table td {
            vertical-align: middle;
        }
        .total-price-summary {
            font-size: 18px;
            color: #4e31aa;
            font-weight: bold;
        }
        .checkout-btn {
            background-color: #4e31aa;
            color: white;
            padding: 10px 30px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        .checkout-btn:hover {
            background-color: #3a1078;
            transform: translateY(-2px);
        }
        .back-btn {
            color: #4e31aa;
            transition: all 0.3s ease;
        }
        .back-btn:hover {
            color: #3a1078;
            text-decoration: none;
        }
        .pesanan-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 24px;
            background-color: #4e31aa;
            color: #ffffff;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(78, 49, 170, 0.3);
        }

        .pesanan-btn:hover {
            background-color: #3a1078;
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(58, 16, 120, 0.4);
            text-decoration: none;
            color: white
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="d-flex align-items-center">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo Klinik IT">
                <h1 class="ml-3">Checkout</h1>
            </div>
        </div>
    </div>

    <div class="main-content container">
        <div class="mb-3">
            <a href="/toko" class="back-btn">
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
                    <td colspan="4" class="text-right">Total:</td>
                    <td class="total-price-summary">Rp. 18.758.000</td>
                </tr>
            </tfoot>
        </table>

        <!-- Tombol Buat Pesanan -->
        <div class="button-pesanan">
            <a href="#" class="pesanan-btn">
                <span class="btn-text">Buat Pesanan</span>
                <span class="btn-icon">
            </a>
        </div>
    </div>
</body>
</html>