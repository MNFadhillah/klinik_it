
<?php $__env->startSection('title', 'sperpart'); ?>
<?php $__env->startSection('content'); ?>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background-color: #f0f0f0;
        padding: 20px;
        font-size: 16px;
    }

    .container-sperpart {
        max-width: 1400px;
        margin: 0 auto;
        background-color: #ffffff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .header {
        background-color: #A1BECA;
        color: white;
        padding: 20px;
        text-align: center;
        position: relative;
        font-size: 24px;
    }

    .back-button {
        position: absolute;
        top: 20px;
        left: 20px;
        background-color: rgba(255, 255, 255, 0.3);
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    .back-button img {
        width: 20px;
        height: 20px;
    }

    .tabs {
        display: flex;
        background-color: #f8f8f8;
        border-bottom: 1px solid #e0e0e0;
    }

    .tab {
        flex: 1;
        text-align: center;
        padding: 15px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .tab.active {
        background-color: #ffffff;
        border-bottom: 3px solid #A1BECA;
        font-weight: bold;
    }

    .order-list {
        padding: 20px;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
    }

    .order-item {
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        padding: 20px;
        background-color: #ffffff;
    }

    .order-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
        font-size: 14px;
    }

    .order-status {
        color: #4CAF50;
        font-weight: bold;
    }

    .order-details {
        display: flex;
        align-items: center;
    }

    .order-image {
        width: 80px;
        height: 80px;
        object-fit: cover;
        margin-right: 15px;
        border-radius: 5px;
    }

    .order-info {
        flex: 1;
    }

    .order-name {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .order-price {
        color: #FF5722;
        font-weight: bold;
    }

    .order-actions {
        margin-top: 15px;
        text-align: right;
    }

    .action-button {
        background-color: #A1BECA;
        color: white;
        border: none;
        padding: 8px 15px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .action-button:hover {
        background-color: #8CAAB8;
    }
</style>
<div class="container-sperpart">
    <div class="header">
        <button class="back-button" onclick="window.location.href='/informasi/isi_informasi';">
            <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Back Icon">
        </button>
        <h1>Sperpart</h1>
    </div>

    <div class="tabs">
        <div class="tab active">Semua</div>
        <div class="tab">Mesin</div>
        <div class="tab">Kelistrikan</div>
        <div class="tab">Aksesoris</div>
    </div>

    <div class="order-list">
        <div class="order-item">
            <div class="order-header">
                <span>Kode: SP001</span>
                <span class="order-status">Tersedia</span>
            </div>
            <div class="order-details">
                <img src="https://via.placeholder.com/80" alt="Sperpart" class="order-image">
                <div class="order-info">
                    <div class="order-name">Filter Oli</div>
                    <div class="order-price">Rp 50.000</div>
                </div>
            </div>
            <div class="order-actions">
                <button class="action-button">Pesan</button>
            </div>
        </div>

        <div class="order-item">
            <div class="order-header">
                <span>Kode: SP002</span>
                <span class="order-status">Tersedia</span>
            </div>
            <div class="order-details">
                <img src="https://via.placeholder.com/80" alt="Sperpart" class="order-image">
                <div class="order-info">
                    <div class="order-name">Busi</div>
                    <div class="order-price">Rp 25.000</div>
                </div>
            </div>
            <div class="order-actions">
                <button class="action-button">Pesan</button>
            </div>
        </div>

        <div class="order-item">
            <div class="order-header">
                <span>Kode: SP003</span>
                <span class="order-status">Habis</span>
            </div>
            <div class="order-details">
                <img src="https://via.placeholder.com/80" alt="Sperpart" class="order-image">
                <div class="order-info">
                    <div class="order-name">Kampas Rem</div>
                    <div class="order-price">Rp 75.000</div>
                </div>
            </div>
            <div class="order-actions">
                <button class="action-button" disabled>Habis</button>
            </div>
        </div>

        <!-- Tambahkan lebih banyak item sperpart sesuai kebutuhan -->

    </div>
</div>

<script>
    // Script untuk mengatur tab aktif
    const tabs = document.querySelectorAll('.tab');
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            // Di sini Anda bisa menambahkan logika untuk memfilter sperpart berdasarkan tab yang dipilih
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klinik_it\resources\views/user/profil/sperpart.blade.php ENDPATH**/ ?>