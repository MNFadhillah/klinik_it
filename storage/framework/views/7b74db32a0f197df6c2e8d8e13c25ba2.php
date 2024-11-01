<?php $__env->startSection('title', 'Biaya Service'); ?>

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
    <h1>Biaya Service</h1>
</header>
<button class="back-button" onclick="window.history.back();">
    <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Back Icon">
</button>
    <div class="image-container">
        <img src="<?php echo e(asset('assets/img/biaya_service.png')); ?>" alt="Foto Biaya Service">
    </div>

        <!-- Teks di bawah gambar dengan layout rata kiri -->
        <div class="description">
            <ul>
                <li>Berikut adalah Biaya Jasa Service Komputer, Netbook dan Laptop dll:</li>
                <ol>
                    <li>Biaya untuk install komputer (termasuk OS (WINDOWS / LINUX) & software standard) 150.000,-</li>
                    <li>Biaya untuk install netbook (termasuk OS (WINDOWS / LINUX) & software standard) 150.000,-</li>
                    <li>Biaya untuk install laptop (termasuk OS (WINDOWS / LINUX) & software standard) 150.000,-</li>
                </ol>
                <li>Berikut adalah biaya untuk Pengadaan dan Perakitan Komputer:</li>
                <ol>
                    <li>Budget sesuai yang Anda punya, biaya untuk pengadaan dan perakitan komputer (mulai dari casing+fan, power supply, dvd r / w, hardisk, motherboard, processor+fan, ram, vga card, lan card, keyboard, mouse, monitor, kabel power cpu dan monitor) 150.000,-/pc (sudah termasuk install os dan software).</li>
                </ol>
                <li>Biaya Pengecekan Komputer Kantor atau Warnet dan Game Online:</li>
                <ol>
                    <li>Instalasi atau pasang kabel jaringan (setting LAN) Mulai dari 150.000,-/titik</li>
                    <li>Install OS dan software Mulai dari 150.000,-/unit</li>
                    <li>Install software / game online / offline 25.000</li>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klinik_it\resources\views/user/informasi/biaya.blade.php ENDPATH**/ ?>