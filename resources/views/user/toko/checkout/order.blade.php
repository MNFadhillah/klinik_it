<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags dan link ke CSS eksternal (Bootstrap dan Font Awesome) -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order - Klinik IT Solution</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- CSS tambahan untuk styling halaman -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        .header {
            background-color: #3a1078;
            padding: 15px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
        }
        .header img {
            height: 60px;
        }
        .header h1 {
            color: #fff;
            font-size: 24px;
            margin-left: 15px;
        }
        .main-content {
            padding: 30px 0;
        }
        .card {
            border: none;
            box-shadow: 0 0 20px rgba(0,0,0,.08);
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
        }
        .card-header {
            background-color: #4e31aa;
            color: #fff;
            font-weight: bold;
        }
        .box {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,.08);
            margin-bottom: 20px;
        }
        .product-image {
            width: 80px;
            border-radius: 5px;
            transition: transform 0.3s ease;
        }
        .product-image:hover {
            transform: scale(1.1);
        }
        .summary-table th, .summary-table td {
            vertical-align: middle;
        }
        .total-price-summary {
            font-size: 18px;
            color: #4e31aa;
            font-weight: bold;
        }
        .checkout-btn {
            background-color: #4e31aa;
            color: white;
            padding: 10px 30px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        .checkout-btn:hover {
            background-color: #3a1078;
            transform: translateY(-2px);
        }
        .back-btn {
            color: #4e31aa;
            transition: all 0.3s ease;
        }
        .back-btn:hover {
            color: #3a1078;
            text-decoration: none;
        }
        .pesanan-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 24px;
            background-color: #4e31aa;
            color: #ffffff;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(78, 49, 170, 0.3);
        }

        .pesanan-btn:hover {
            background-color: #3a1078;
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(58, 16, 120, 0.4);
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    @if (Auth::check()) 
        <div class="header">
            <div class="container">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo Klinik IT">
                    <h1 class="ml-3">Order</h1>
                </div>
            </div>
        </div>

        <div class="main-content container">
            <div class="mb-3">
                <a href="/toko" class="back-btn">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>

            <div class="box">
                <h4>Informasi Pengiriman</h4>
                <p><strong>Nama Penerima:</strong> {{ Auth::user()->name }}</p>
                <!-- Informasi Pengiriman yang lainnya bisa ditambahkan sesuai kebutuhan -->
            </div>

            <div class="box">
                <h2>Ringkasan Pesanan</h2>
                <form action="{{ route('toko.order.create') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Penerima</label>
                        <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" required value="{{ Auth::user()->name }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Pengiriman</label>
                        <textarea name="alamat" id="alamat" class="form-control" required>{{ old('alamat') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="nomor_telepon">Nomor Telepon</label>
                        <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control" required value="{{ old('nomor_telepon') }}">
                    </div>
                
                    <!-- Ringkasan produk yang dipilih -->
                    <table class="table summary-table">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $total = 0; @endphp
                            @foreach($selectedProducts as $produkId => $item)
                                <tr>
                                    <td>
                                        <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}" class="product-image">
                                    </td>
                                    <td>{{ $item['name'] }}</td>
                                    <td id="price_{{ $produkId }}" data-price="{{ $item['price'] }}">Rp. {{ number_format($item['price'], 0, ',', '.') }}</td>
                                    <td>{{ $item['quantity'] }}</td>
                                    <td id="total_{{ $produkId }}">Rp. {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                
                    <div class="total-price-summary">
                        <p>Total Harga: <span id="totalHarga">Rp. {{ number_format($total, 0, ',', '.') }}</span></p>
                    </div>
                
                    <button type="submit" class="btn btn-primary pesanan-btn">Buat Pesanan</button>
                </form>
                
            </div>
        </div>
    @else
        <script>
            window.location.href = "{{ route('login') }}";
        </script>
    @endif

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Fungsi untuk mengupdate total keseluruhan
            function updateOverallTotal() {
                let overallTotal = 0;
    
                // Menjumlahkan semua harga total produk
                document.querySelectorAll('[id^="total_"]').forEach(function (el) {
                    let price = parseFloat(el.textContent.replace('Rp. ', '').replace(/\./g, '').replace(',', '.'));
                    if (!isNaN(price)) {
                        overallTotal += price;
                    }
                });
    
                // Update total harga keseluruhan
                document.getElementById('totalHarga').textContent = "Rp. " + overallTotal.toLocaleString('id-ID');
            }
    
            // Panggil fungsi untuk menghitung total keseluruhan saat halaman pertama kali dimuat
            updateOverallTotal();
        });
    </script>
    
</body>
</html>
