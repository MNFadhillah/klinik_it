<?php $__env->startSection('content'); ?>
<div class="content-container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-8 text-center">
            <h2 class="display-7 fw-bold">Daftar Chat</h2>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table custom-table rounded-table">
            <thead class="bg-light">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Chat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Ahmad Ibnu</td>
                    <td>ahmad_ibnu01</td>
                    <td>
                        <button class="btn btn-sm btn-primary">
                            <i class="fas fa-comments"></i> Buka Chat
                        </button>
                    </td>
                </tr>
                <!-- Tambahkan baris lain sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klinik_it\resources\views/admin/servis/daftar-chat.blade.php ENDPATH**/ ?>