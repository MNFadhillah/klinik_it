<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Klinik IT Solution'); ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(asset('images/favicon.ico')); ?>" type="image/x-icon">
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

        .header-icons {
            display: flex;
            gap: 15px;
        }

        .header-icons img {
            width: 35px;
            height: 35px;
        }

        .main-content {
            padding: 20px;
        }

        .product-row {
            background-color: #e0f7fa;
            border-radius: 10px;
            margin-bottom: 15px;
            padding: 10px;
        }

        .product-image img {
            width: 100px;
            border-radius: 5px;
        }

        .price, .total-price {
            font-size: 18px;
            color: #6a1b9a;
            font-weight: bold;
        }

        .delete-btn {
            background-color: transparent;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: #6a1b9a;
        }

        .delete-btn:hover {
            color: #d32f2f;
        }

        .bottom-summary {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .bottom-summary p {
            margin: 0;
        }

        .select-all {
            display: flex;
            align-items: center;
        }

        .select-all input {
            margin-right: 10px;
        }

        .total-price-summary {
            font-size: 18px;
            color: #6a1b9a;
            font-weight: bold;
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

    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="header-left">
            <a class="navbar-brand" href="#">
                <img src="<?php echo e(asset('assets/img/logo.jpg')); ?>" alt="Logo Klinik IT" height="80"> KERANJANG BELANJA
            </a>
        </div>
        <div class="header-icons">
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
        <div class="container">
            <!-- Tabel Header -->
            <div class="row">
                <div class="col-12">
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
                                    <img src="../img/1.jpg" alt="Produk 1" class="img-fluid" style="width: 100px;">
                                </td>
                                <td class="product-description">
                                    <strong>Xiaomi RedmiBook 15</strong><br>
                                    Laptop Xiaomi RedmiBook 15 intel i3-1115G4 Ram 8GB + SSD 256GB W10 - Non Bundling
                                </td>
                                <td class="price">Rp. 4.919.000</td>
                                <td class="total-price">Rp. 4.919.000</td>
                                <td>
                                    <button class="delete-btn btn btn-danger btn-sm">🗑</button>
                                </td>
                            </tr>
        
                            <!-- Product Row 2 -->
                            <tr class="product-row align-items-center">
                                <td class="product-image">
                                    <img src="../img/2.jpg" alt="Produk 2" class="img-fluid" style="width: 100px;">
                                </td>
                                <td class="product-description">
                                    <strong>Lenovo Thinkpad X220</strong><br>
                                    Lenovo Thinkpad Laptop X220 Core i5 Ram 4/8GB HDD 320/256GB Murah - X220I I3 GEN2
                                </td>
                                <td class="price">Rp. 1.390.000</td>
                                <td class="total-price">Rp. 1.390.000</td>
                                <td>
                                    <button class="delete-btn btn btn-danger btn-sm">🗑</button>
                                </td>
                            </tr>
        
                            <!-- Product Row 3 -->
                            <tr class="product-row align-items-center">
                                <td class="product-image">
                                    <img src="../img/3.jpg" alt="Produk 3" class="img-fluid" style="width: 100px;">
                                </td>
                                <td class="product-description">
                                    <strong>Apple Macbook Air M1</strong><br>
                                    (RESMI IBOX) Apple MacBook Air M1 Chip 2020 256GB 8GB Garansi resmi - silver
                                </td>
                                <td class="price">Rp. 12.449.000</td>
                                <td class="total-price">Rp. 12.449.000</td>
                                <td>
                                    <button class="delete-btn btn btn-danger btn-sm">🗑</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        
            <!-- Summary Section -->
            <div class="bottom-summary">
                <div class="select-all">
                    <input type="checkbox">
                    <p>Pilih Semua (3)</p>
                </div>
                <div class="total-price-summary">
                    Total (3): <strong>Rp. 18.758.000</strong>
                </div>
                <a href="/checkout" class="checkout-btn">Chekout</a>
            </div>
        </div>
    </div>

</body>
</html><?php /**PATH C:\xampp\htdocs\klinik_it\resources\views/user/cart.blade.php ENDPATH**/ ?>