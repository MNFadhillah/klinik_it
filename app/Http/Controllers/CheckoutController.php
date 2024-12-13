<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Produk;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
{
    $produkIds = $request->input('produk_id', []); // Ambil ID produk dari request
    if (empty($produkIds)) {
        return redirect()->back()->with('error', 'Tidak ada produk yang dipilih untuk checkout.');
    }

    $cart = session()->get('cart', []);
    $selectedProducts = [];
    $total = 0;

    // Filter produk yang dipilih dari keranjang
    foreach ($produkIds as $produkId) {
        if (isset($cart[$produkId])) {
            $selectedProducts[$produkId] = $cart[$produkId];
        }
    }

    if (empty($selectedProducts)) {
        return redirect()->back()->with('error', 'Produk yang dipilih tidak ditemukan dalam keranjang.');
    }

    // Hitung total harga
    foreach ($selectedProducts as $item) {
        $total += $item['price'] * $item['quantity'];
    }

    // Kirim data ke view checkout
    return view('user.toko.checkout.index', compact('selectedProducts', 'total'));
}


    // Fungsi untuk menampilkan halaman sukses setelah checkout
    public function success($orderId)
    {
        $order = Order::with('details.product')->findOrFail($orderId);
        return view('toko.checkout.index', compact('order'));
    }
    public function checkoutDirect(Request $request, $produkId)
    {
        // Ambil produk berdasarkan ID
        $produk = Produk::find($produkId);
    
        // Periksa apakah produk ditemukan
        if (!$produk) {
            return redirect()->back()->with('error', 'Produk tidak ditemukan.');
        }
    
        // Set default quantity jika tidak ada di request
        $produk->quantity = $request->input('quantity', 1); // Default quantity adalah 1
    
        // Hitung total harga (opsional, jika ingin digunakan)
        $total = $produk->harga * $produk->quantity;
    
        // Kirim data ke view
        return view('user.toko.checkout', compact('produk', 'total'));
    }

    

    // Proses pembayaran
    // public function processPayment(Request $request)
    // {
    //     // Logika untuk memproses pembayaran
    //     // Misalnya menggunakan gateway pembayaran atau sistem pembayaran lain

    //     // Jika pembayaran berhasil
    //     return redirect()->route('order.success', ['orderId' => $orderId]);
    // }

    // Menampilkan halaman sukses setelah pembayaran
    // public function success($orderId)
    // {
    //     $order = Order::findOrFail($orderId);

    //     return view('checkout.success', compact('order'));
    // }
}
