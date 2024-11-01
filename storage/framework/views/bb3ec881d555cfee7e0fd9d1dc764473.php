<?php $__env->startSection('title', 'Perakitan dan Instalasi Komputer'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .back-button {
        position: relative; /* Menggunakan relative agar mengikuti tata letak elemen */
        display: inline-flex; /* Inline agar bisa bersebelahan dengan elemen lain jika perlu */
        margin-top: 10px; /* Jarak vertikal dari elemen sebelumnya */
        /* margin-bottom: 20px; Jarak ke elemen berikutnya */
        margin-left: 20px; /* Menggeser tombol sedikit ke kanan */
        background-color: #A1BECA;
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        color: white;
        z-index: 10;
    }
    
    .back-button img {
        width: 20px;
        height: 20px;
        pointer-events: none;
    }
    
    .back-button:hover {
        background-color: #CDC1FF;
    }
    </style>
    <header>
        <h1>Perakitan dan Instalasi Komputer</h1>
    </header>
    <button class="back-button" onclick="window.location.href='/layanan/jasa_instalasi';">
        <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Back Icon">
    </button> 
    <div class="image-container">
        <img src="<?php echo e(asset('assets/img/perakitan_instalasi.jpg')); ?>" alt="Foto Instalasi Software">
    </div>

    <!-- Teks di bawah gambar dengan layout rata kiri -->
    <div class="description">
        <ul>
            <li>Perakitan Komputer:</li>
            <ol>
                <li>Persiapan: Mengumpulkan komponen seperti motherboard, prosesor, RAM, hard disk, dan power supply.</li>
                <li>Perakitan: Memasang komponen-komponen tersebut ke dalam casing dan menghubungkan kabel-kabel.</li>
                <li>Pengujian: Memastikan semua komponen terpasang dengan benar dan berfungsi.</li>
            </ol>
            <br>
            <li>Instalasi Komputer:</li>
            <ol>
                <li>Instalasi Sistem Operasi: Menginstal OS (seperti Windows atau Linux) dari media instalasi.</li>
                <li>Instalasi Driver: Menginstal driver perangkat keras untuk kinerja optimal.</li>
                <li>Instalasi Aplikasi: Menambahkan software yang dibutuhkan, seperti aplikasi dan antivirus.</li>
                <li>Konfigurasi: Menyesuaikan pengaturan sistem seperti jaringan dan akun pengguna.</li>
            </ol>
        </ul>
    </div>

    <!-- Tombol Mulai Chat dan Formulir -->
    <div class="button-container">
        <section class="center-button">
            <p>Mulai Chat :</p>
            <a href="/layanan/chat">
                <i class="fas fa-comments"></i> Click to Chat
            </a>
        </section>
        <section class="center-button">
            <p>Ingin Instalasi? Isi formulir di bawah ini :</p>
            <a href="/formulir/form_instalasi">
                <i class="fas fa-file-alt"></i> Klik untuk akses
            </a>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klinik_it\resources\views/user/layanan/perakitan_instalasi.blade.php ENDPATH**/ ?>