<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Klinik IT Solution</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
        .total-price-summary {
            font-size: 18px;
            color: #4e31aa;
            font-weight: bold;
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
                    <h1 class="ml-3">Checkout</h1>
                </div>
            </div>
        </div>

        <div class="main-content container">
            <div class="box">
                <h4>Informasi Pengiriman</h4>
                <p><strong>Nama Penerima:</strong> {{ Auth::user()->name }}</p>
                <!-- Tambahkan informasi pengiriman lainnya jika diperlukan -->
            </div>

            <div class="box">
                <h2>Detail Produk</h2>
                <form action="#" method="POST">
                    @csrf
                    @php
                        $item = [
                            'name' => 'Nama Produk',
                            'price' => 50000,
                            'quantity' => 1,
                            'image' => 'path/to/image.jpg',
                        ];
                    @endphp

                    <table class="table">
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
                            <tr>
                                @php $total = 0; @endphp
                                <td>
                                    <img src="{{ asset('storage/' . $produk->gambar) }}" class="product-image img-fluid rounded-top" style="height: auto; object-fit: cover;" alt="{{ $produk->nama_produk }}">
                                </td>
                                <td>{{ Str::limit($produk->deskripsi, 60) }}</td>
                                <td>Rp{{ number_format($produk->harga, 0, ',', '.') }}</td>
                                <td>{{ $produk->quantity }}</td>
                                <td>Rp{{ number_format($produk->harga * $produk->quantity, 0, ',', '.') }}</td>
                            </tr>
                            @php $total += $produk->harga * $produk->quantity; @endphp
                            
                        </tbody>
                    </table>

                    <div class="total-price-summary">
                        <p>Total Harga: <span id="totalHarga">Rp. {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</span></p>
                    </div>

                    <button type="submit" class="pesanan-btn">Buat Pesanan</button>
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
            const quantityInput = document.querySelector("input[name='quantity']");
            const priceElement = document.getElementById("price");
            const totalElement = document.getElementById("total");
            const totalHargaElement = document.getElementById("totalHarga");

            quantityInput.addEventListener("input", function () {
                const quantity = parseInt(quantityInput.value);
                const price = parseFloat(priceElement.dataset.price);
                const total = price * quantity;

                totalElement.textContent = "Rp. " + total.toLocaleString('id-ID');
                totalHargaElement.textContent = "Rp. " + total.toLocaleString('id-ID');
            });
        });
    </script>
</body>
</html>
