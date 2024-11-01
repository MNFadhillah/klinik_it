<?php $__env->startSection('title', 'Tutorial Ganti Layar Laptop'); ?>

<?php $__env->startSection('content'); ?>
    <header>
        <h1>Tutorial Perbaikan Koneksi Jaringan</h1>
    </header>

    <div class="description">
        <p>Berikut adalah langkah-langkah untuk perbaikan Koneksi Jaringan pada laptop:</p>
        <ol>
            <li>Buka Setting</li>
            <img src="<?php echo e(asset('assets/img/koneksi_step1.jpg')); ?>" alt="Membuka Setting" width="300">
            <br><br>

            <li>Pilih network and internet</li>
            <img src="<?php echo e(asset('assets/img/koneksi_step2.jpg')); ?>" alt="Memilih network&internet" width="300">
            <br><br>

            <li>Klik Advanced network settings</li>
            <img src="<?php echo e(asset('assets/img/koneksi_step3.jpg')); ?>" alt="Klik dvanced network setting" width="300">
            <br><br>

            <li>Kemudian klik Network Reset</li>
            <img src="<?php echo e(asset('assets/img/koneksi_step4.jpg')); ?>" alt="Membuka Network Reset" width="300">
            <br><br>

            <li>Klik Reset Now dan yes</li>
            <img src="<?php echo e(asset('assets/img/koneksi_step5.jpg')); ?>" alt="Klik reset now" width="300">
            <br><br>

            <li>Maka jaringan sudah bisa dipakai kembali</li>
            <img src="<?php echo e(asset('assets/img/koneksi_step6.jpg')); ?>" alt="Sudah bisa dipakai" width="300">
            <br><br>
        </ol>
        <div class="warning">
            <p style="color: red;"><strong>Peringatan:</strong> Jika Anda tidak yakin dengan prosedur ini, sebaiknya bawa laptop Anda ke teknisi profesional untuk menghindari kerusakan lebih lanjut.</p>
        </div>
    </div>

    <div class="button-container">
        <section class="center-button">
            <p>Butuh bantuan lebih lanjut? Mulai Chat:</p>
            <a href="/layanan/chat"><i class="fas fa-comments"></i>Click to Chat</a>
        </section>
        <section class="center-button">
            <p>Ingin layanan penggantian layar? Isi formulir di bawah ini:</p>
            <a href="/formulir/form_servis"><i class="fas fa-file-alt"></i>Klik untuk akses</a>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klinik_it\resources\views/user/informasi/tutorial_perbaikanKoneksi.blade.php ENDPATH**/ ?>