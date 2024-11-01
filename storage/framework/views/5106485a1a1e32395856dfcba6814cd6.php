<?php $__env->startSection('content'); ?>
<div class="content-container">
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="display-7 fw-bold">Daftar Pesanan</h2>
            </div>
        </div>
        <div class="d-flex justify-content-end mb-3">
            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari..." aria-label="Cari" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table custom-table rounded-table">
                <thead>
                    <tr>
                        <th>ID Pesanan</th>
                        <th>Nama Pelanggan</th>
                        <th>Alamat</th>
                        <th>Pengiriman</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Jl. Contoh No. 123</td>
                        <td>JNE</td>
                        <td>Produk A</td>
                        <td>2</td>
                        <td>Rp 200.000</td>
                        <td><span class="badge bg-success">Selesai</span></td>
                        <td>
                            <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                        </td>
                    </tr>
                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klinik_it\resources\views/admin/toko/pesanan.blade.php ENDPATH**/ ?>