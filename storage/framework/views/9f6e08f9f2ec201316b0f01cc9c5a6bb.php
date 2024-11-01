<?php $__env->startSection('title', 'Tutorial Instalasi OS pada Laptop'); ?>

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
        <h1>Tutorial Instalasi OS pada Laptop</h1>
    </header>
    <button class="back-button" onclick="window.location.href='/informasi/isi_informasi';">
        <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Back Icon">
    </button> 
    <div class="description">
        <p>Berikut adalah langkah-langkah untuk melakukan instalasi OS pada laptop:</p>
        <ol>
            <li>Persiapan:
                <ul>
                    <li>Backup data penting Anda.</li>
                    <li>Siapkan media instalasi (USB bootable atau DVD instalasi OS).</li>
                </ul>
                <img src="<?php echo e(asset('assets/img/os_step1.jpeg')); ?>" alt="Persiapan" width="300">
            </li>
        </br>
            <li>Atur boot order di BIOS:
                <ul>
                    <li>Nyalakan laptop dan masuk ke BIOS (biasanya dengan menekan F2, F10, atau Del saat booting).</li>
                    <li>Pilih flashdiks lalu enter.</li>
                </ul>
                <img src="<?php echo e(asset('assets/img/os_step2.jpeg')); ?>" alt="Atur BIOS" width="300">
            </li>
        </br>
            <li>Penyesuaian:
                <ul>
                    <li>Pilih bahasa indonesia.</li>
                    <li>Klik next.</li>
                </ul>
                <img src="<?php echo e(asset('assets/img/os_step3.jpeg')); ?>" alt="Penyesuaian" width="300">
            </li>
        </br>
            <li>Mulai instalasi:
                <ul>
                    <li>Klik Install now.</li>
                </ul>
                <img src="<?php echo e(asset('assets/img/os_step4.jpeg')); ?>" alt="Mulai Instalasi" width="300">
            </li>
        </br>
            <li>Ikuti wizard instalasi:
                <ul>
                    <li>klik kolom centang.</li>
                    <li>klik next.</li>
                    <li>pilih costume.</li>
                </ul>
                <img src="<?php echo e(asset('assets/img/os_step5.jpeg')); ?>" alt="Wizard" width="300">
                <img src="<?php echo e(asset('assets/img/os_step6.jpeg')); ?>" alt="costum" width="300">
            </li>
        </br>
            <li>Partisi hard drive (jika diperlukan):
                <ul>
                    <li>Hapus partisi lama dan buat partisi baru sesuai kebutuhan.</li>
                    <li>Pilih partisi untuk instalasi OS.</li>
                </ul>
                <img src="<?php echo e(asset('assets/img/os_step7.jpeg')); ?>" alt="partisi" width="300">
            </li>
        </br>
            <li>Tunggu proses instalasi selesai:
                <ul>
                    <li>Laptop akan restart beberapa kali selama proses ini.</li>
                </ul>
                <img src="<?php echo e(asset('assets/img/os_step8.jpeg')); ?>" alt="Proses Instalasi" width="300">
            </li>
        </br>
            <li>Selesaikan pengaturan awal:
                <ul>
                    <li>Buat akun pengguna.</li>
                    <li>Atur preferensi privasi dan lainnya.</li>
                </ul>
                <img src="<?php echo e(asset('assets/img/os_step9.jpeg')); ?>" alt="pengaturanAwal" width="300">
            </li>
        </br>
            <li>Windows Siap digunakan .</li>
            <img src="<?php echo e(asset('assets/img/os_step10.jpeg')); ?>" alt="Selesai" width="300">
        </ol>
        <div class="warning">
            <p style="color: red;"><strong>Peringatan:</strong> Instalasi OS akan menghapus semua data di partisi yang dipilih. Pastikan untuk mem-backup data penting sebelum memulai proses ini.</p>
        </div>
    </div>

    <div class="button-container">
        <section class="center-button">
            <p>Butuh bantuan lebih lanjut? Mulai Chat:</p>
            <a href="/layanan/chat"><i class="fas fa-comments "></i>Click to Chat</a>
        </section>
        <section class="center-button">
            <p>Ingin layanan instalasi OS? Isi formulir di bawah ini:</p>
            <a href="/formulir/form_servis"><i class="fas fa-file-alt"></i>Klik untuk akses</a>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klinik_it\resources\views/user/informasi/tutorial_InstalasiOS.blade.php ENDPATH**/ ?>