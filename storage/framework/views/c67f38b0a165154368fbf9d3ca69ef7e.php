<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="container my-4">
            <div class="row justify-content-end">
                <div class="col-auto">
                    <div class="dropdown d-inline-block">
                        <a href="user/cart" class="btn btn-primary">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Keranjang <span class="badge text-bg-danger">1</span>
                        </a>
                    </div>
                    <div class="d-inline-block">
                        <a href="/checkout  " class="btn btn-success">
                            <i class="fa fa-money" aria-hidden="true"></i> Lihat Pesanan
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product 1 -->
        <div class="col-md-3 col-sm-6 mt-3">
            <div class="img_thumbnail productlist">
                <img src="../img/1.jpg" class="img-fluid" alt="Product 1">
                <div class="caption">
                    <h4>Xiaomi RedmiBook 15</h4>
                    <p>Laptop Xiaomi RedmiBook 15 intel i3-1115G4 Ram 8GB + SSD 256GB W10 - Non Bundling</p>
                    <p><strong>Price: </strong>Rp. 4.919.000</p>
                    <p><strong>Stok: </strong>10</p>
                    <div class="d-flex justify-content-between">
                        <a href="/layanan/chat" class="btn btn-secondary" role="button">
                            <i class="fas fa-comments"></i> Chat
                        </a>
                        <a href="#" class="btn btn-warning" role="button">
                            <i class="fas fa-shopping-cart"></i> Cart
                        </a>
                        <a href="/checkout" class="btn btn-success" role="button">
                            <i class="fas fa-credit-card"></i> Buy
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product 2 -->
        <div class="col-md-3 col-sm-6 mt-3">
            <div class="img_thumbnail productlist">
                <img src="../img/2.jpg" class="img-fluid" alt="Product 2">
                <div class="caption">
                    <h4>Lenovo Thinkpad X220</h4>
                    <p>Lenovo Thinkpad Laptop X220 Core i5 Ram 4/8GB HDD 320/256GB Murah - X220I I3 GEN2</p>
                    <p><strong>Price: </strong>Rp. 1.390.000</p>
                    <p><strong>Stok: </strong>11</p>
                    <div class="d-flex justify-content-between">
                        <a href="/layanan/chat" class="btn btn-secondary" role="button">
                            <i class="fas fa-comments"></i> Chat
                        </a>
                        <a href="#" class="btn btn-warning" role="button">
                            <i class="fas fa-shopping-cart"></i> Cart
                        </a>
                        <a href="/checkout" class="btn btn-success" role="button">
                            <i class="fas fa-credit-card"></i> Buy
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product 3 -->
        <div class="col-md-3 col-sm-6 mt-3">
            <div class="img_thumbnail productlist">
                <img src="../img/3.jpg" class="img-fluid" alt="Product 3">
                <div class="caption">
                    <h4>Apple Macbook Air M1</h4>
                    <p>(RESMI IBOX) Apple MacBook Air M1 Chip 2020 256GB 8GB Garansi resmi - silver</p>
                    <p><strong>Price: </strong>Rp. 12.449.000</p>
                    <p><strong>Stok: </strong>7</p>
                    <div class="d-flex justify-content-between">
                        <a href="/layanan/chat" class="btn btn-secondary" role="button">
                            <i class="fas fa-comments"></i> Chat
                        </a>
                        <a href="#" class="btn btn-warning" role="button">
                            <i class="fas fa-shopping-cart"></i> Cart
                        </a>
                        <a href="/checkout" class="btn btn-success" role="button">
                            <i class="fas fa-credit-card"></i> Buy
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product 4 -->
        <div class="col-md-3 col-sm-6 mt-3">
            <div class="img_thumbnail productlist">
                <img src="../img/4.jpg" class="img-fluid" alt="Product 4">
                <div class="caption">
                    <h4>ASUS VivoBook 14</h4>
                    <p>ASUS VivoBook 14 M415DAO - RYZEN 3-3250U 8GB SSD 512GB 14" FHD W10 OHS</p>
                    <p><strong>Price: </strong>Rp. 5.999.000</p>
                    <p><strong>Stok: </strong>5</p>
                    <div class="d-flex justify-content-between">
                        <a href="/layanan/chat" class="btn btn-secondary" role="button">
                            <i class="fas fa-comments"></i> Chat
                        </a>
                        <a href="#" class="btn btn-warning" role="button">
                            <i class="fas fa-shopping-cart"></i> Cart
                        </a>
                        <a href="/checkout" class="btn btn-success" role="button">
                            <i class="fas fa-credit-card"></i> Buy
                        </a>
                    </div>
                </div >
            </div>
        </div>
        <!-- Add more products as needed -->
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klinik_it\resources\views/user/toko.blade.php ENDPATH**/ ?>