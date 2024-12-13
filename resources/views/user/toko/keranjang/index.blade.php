@extends('layouts.main')

@section('title', 'Keranjang Belanja')

@section('content')
<div class="container mt-4">
    @if(session('success'))
        <div class="alert-container">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    
    @if(session('error'))
        <div class="alert-container">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    
    @if ($errors->any())
        <div class="alert-container">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    <h1>Keranjang Belanja</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach(session('cart', []) as $produkId => $item)
                    <tr>
                        <td>
                            <input type="checkbox" name="produk_id[]" value="{{ $produkId }}">  {{-- Bagian ceklis produk untuk memilh --}}
                        </td>
                        <td>
                            <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}" class="img-fluid" width="50">
                            {{ $item['name'] }}
                        </td>
                        <td>Rp{{ number_format($item['price'], 0, ',', '.') }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>Rp{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
                        <td>
                            <form action="{{ route('toko.cart.remove', $produkId) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @php $total += $item['price'] * $item['quantity']; @endphp
                @endforeach
            </tbody>
        </table>
    </div>
    <h5>Total: Rp{{ number_format($total, 0, ',', '.') }}</h5>
    <form id="checkout-form" action="{{ route('toko.checkout.index') }}" method="GET">
        @csrf
        <button type="button" class="btn btn-primary" onclick="validateCheckout()">Checkout</button>
    </form>
    
    
    
</div>
<script>
    function validateCheckout() {
    // Ambil semua checkbox yang dicentang
    const checkboxes = document.querySelectorAll('input[name="produk_id[]"]:checked');
    
    // Jika tidak ada checkbox yang dicentang, tampilkan peringatan
    if (checkboxes.length === 0) {
        alert('Silakan pilih setidaknya satu produk untuk melanjutkan ke checkout.');
        return;
    }

    // Ambil ID produk yang dipilih
    const selectedProducts = [];
    checkboxes.forEach((checkbox) => {
        selectedProducts.push(checkbox.value);
    });

    // Tambahkan produk yang dipilih ke formulir sebagai input tersembunyi
    const form = document.getElementById('checkout-form');
    selectedProducts.forEach((id) => {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'produk_id[]';
        input.value = id;
        form.appendChild(input);
    });

    // Kirim formulir
    form.submit();
}

</script>

@endsection