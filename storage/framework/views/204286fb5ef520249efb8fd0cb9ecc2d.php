<?php $__env->startSection('content'); ?>
<div class="content-container">
    <div class="content">
        <div class="row justify-content-center mb-3">
            <div class="col-md-8 text-center">
                <h2 class="display-7 fw-bold">Daftar Instalasi Jaringan</h2>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table custom-table rounded-table table-hover">
                <thead class="custom-header">
                    <tr>
                        <th>ID</th>
                        <th>Nama Klien</th>
                        <th>Tipe Jaringan</th>
                        <th>Tanggal Instalasi</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PT. ABC</td>
                        <td>LAN</td>
                        <td>2023-06-20</td>
                        <td>Gedung A, Lantai 3</td>
                        <td><span class="badge bg-warning">Dalam Proses</span></td>
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

<?php echo $__env->make('layouts.mainAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klinik_it\resources\views/admin/servis/instalasi-jaringan.blade.php ENDPATH**/ ?>