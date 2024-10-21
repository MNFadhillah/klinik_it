<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja - Klinik IT Solution</title>
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
        }
        .card-header {
            background-color: #4e31aa;
            color: #fff;
            font-weight: bold;
        }
        .product-row {
            transition: all 0.3s ease;
        }
        .product-row:hover {
            background-color: #f1f3f5;
        }
        .product-image img {
            width: 80px;
            border-radius: 5px;
            transition: transform 0.3s ease;
        }
        .product-image img:hover {
            transform: scale(1.1);
        }
        .price, .total-price {
            font-size: 16px;
            color: #4e31aa;
            font-weight: bold;
        }
        .delete-btn {
            color: #dc3545;
            transition: all 0.3s ease;
        }
        .delete-btn:hover {
            color: #c82333;
            transform: scale(1.2);
        }
        .bottom-summary {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,.08);
        }
        .select-all {
            font-size: 14px;
        }
        .total-price-summary {
            font-size: 18px;
            color: #4e31aa;
        }
        .checkout-btn {
            background-color: #4e31aa;
            border: none;
            padding: 10px 30px;
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

        .button-checkout {
            text-align: center;
            margin-top: 20px;
        }

        .checkout-btn {
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

        .checkout-btn:hover {
            background-color: #3a1078;
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(58, 16, 120, 0.4);
            text-decoration: none
        }

        .btn-text {
            margin-right: 10px;
        }

        .btn-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 24px;
            height: 24px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
        }

        .btn-icon i {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="d-flex align-items-center">
                <img src="{{ asset('assets/img/logo.png') }}" alt=" Logo Klinik IT">
                <h1 class="ml-3">Keranjang Belanja</h1>
            </div>
        </div>
    </div>
    <div class="main-content container">
        <div class="mb-3">
            <a href="/toko" class="back-btn">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
        <div class="card">
            <div class="card-header">
                Daftar Belanja
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Total Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Product Row 1 -->
                        <tr class="product-row align-items-center">
                            <td class="product-image">
                                <img src="../img/1.jpg" alt="Produk 1" class="img-fluid">
                            </td>
                            <td class="product-description">
                                <strong>Xiaomi RedmiBook 15</strong><br>
                                Laptop Xiaomi RedmiBook 15 intel i3-1115G4 Ram 8GB + SSD 256GB W10 - Non Bundling
                            </td>
                            <td class="price">Rp. 4.919.000</td>
                            <td class="total-price">Rp. 4.919.000</td>
                            <td>
                                <button class="delete-btn btn btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
            
                        <!-- Product Row 2 -->
                        <tr class="product-row align-items-center">
                            <td class="product-image">
                                <img src="../img/2.jpg" alt="Produk 2" class="img-fluid">
                            </td>
                            <td class="product-description">
                                <strong>Lenovo Thinkpad X220</strong><br>
                                Lenovo Thinkpad Laptop X220 Core i5 Ram 4/8GB HDD 320/256GB Murah - X220I I3 GEN2
                            </td>
                            <td class="price">Rp. 1.390.000</td>
                            <td class="total-price">Rp. 1.390.000</td>
                            <td>
                                <button class="delete-btn btn btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
            
                        <!-- Product Row 3 -->
                        <tr class="product-row align-items-center">
                            <td class="product-image">
                                <img src="../img/3.jpg" alt="Produk 3" class="img-fluid">
                            </td>
                            <td class="product-description">
                                <strong>Apple Macbook Air M1</strong><br>
                                (RESMI IBOX) Apple MacBook Air M1 Chip 2020 256GB 8GB Garansi resmi - silver
                            </td>
                            <td class="price">Rp. 12.449.000</td>
                            <td class="total-price">Rp. 12.449.000</td>
                            <td>
                                <button class="delete-btn btn btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="bottom-summary">
            <div class="select-all">
                <input type="checkbox"> Pilih Semua (3)
            </div>
            <div class="total-price-summary">
                Total (3): <strong>Rp. 18.758.000</strong>
            </div>
            <br>
            <div class="button-checkout">
                <a href="../toko/checkout" class="checkout-btn">
                    <span class="btn-text">Checkout</span>
                    <span class="btn-icon"><i class="fas fa-shopping-cart"></i></span>
                </a>
            </div>
        </div>
    </div>
</body>
</html>