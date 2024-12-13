<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // Menampilkan halaman order
    public function showOrder()
    {
        // Ambil data produk yang dipilih
        $selectedProducts = session('cart', []);
        $total = 0;

        // Hitung total harga
        foreach ($selectedProducts as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('checkout.order', [
            'selectedProducts' => $selectedProducts,
            'total' => $total
        ]);
    }

    // Menyimpan pesanan
//     public function createOrder(Request $request)
// {
//     // Validasi data yang dikirimkan
//     $validatedData = $request->validate([
//         'nama_pelanggan' => 'required|string|max:255',
//         'alamat' => 'required|string|max:255',
//         'nomor_telepon' => 'required|string|max:20',
//         // Bisa menambahkan validasi untuk data lainnya jika perlu
//     ]);

//     // Ambil data produk yang dipilih dari session cart
//     $selectedProducts = session('cart', []);
//     $total = 0;
//     $totalBarang = 0;

//     // Hitung total harga dan jumlah barang
//     foreach ($selectedProducts as $item) {
//         $total += $item['price'] * $item['quantity'];
//         $totalBarang += $item['quantity'];
//     }

//     // Simpan pesanan ke database
//     $order = Order::create([
//         'nama_pelanggan' => $validatedData['nama_pelanggan'],
//         'alamat' => $validatedData['alamat'],
//         'nomor_telepon' => $validatedData['nomor_telepon'],
//         'jumlah_barang' => $totalBarang,
//         'total_harga' => $total,
//         'status' => 'pending', // Status awal pesanan
//         'id_pengguna' => Auth::id(), // ID pengguna yang membuat pesanan
//     ]);

//     // Simpan produk yang dipesan (jika diperlukan)
//     foreach ($selectedProducts as $item) {
//         $order->products()->attach($item['id'], [
//             'quantity' => $item['quantity'],
//             'price' => $item['price'],
//         ]);
//     }

//     // Hapus data cart setelah pesanan berhasil dibuat
//     session()->forget('cart');

//     // Redirect ke halaman pembayaran atau konfirmasi pesanan
//     return redirect()->route('order.payment', ['order' => $order->id]);
// }


//     // Menampilkan halaman pembayaran
//     public function showPayment($orderId)
//     {
//         $order = Order::findOrFail($orderId);

//         // Jika status pesanan tidak 'pending', berarti sudah diproses
//         if ($order->status !== 'pending') {
//             return redirect()->route('order.success', ['order' => $order->id]);
//         }

//         return view('checkout.payment', [
//             'order' => $order
//         ]);
//     }

//     // Halaman konfirmasi sukses pembayaran
//     public function paymentSuccess($orderId)
//     {
//         $order = Order::findOrFail($orderId);
//         $order->status = 'paid';  // Ganti status pesanan jadi 'paid'
//         $order->save();

//         return view('checkout.success', ['order' => $order]);
//     }
    // Method untuk menangani pembuatan pesanan
    public function createOrder(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
        ]);

        // Ambil data dari cart session
        $cart = session('cart', []);
        $totalHarga = 0;
        $jumlahBarang = 0;

        foreach ($cart as $item) {
            $totalHarga += $item['price'] * $item['quantity'];
            $jumlahBarang += $item['quantity'];
        }

        // Simpan pesanan ke database
        $order = Order::create([
            'nama_pelanggan' => $validated['nama_pelanggan'],
            'alamat' => $validated['alamat'],
            'nomor_telepon' => $validated['nomor_telepon'],
            'jumlah_barang' => $jumlahBarang,
            'total_harga' => $totalHarga,
            'status' => 'pending',
            'id_pengguna' => Auth::id(),
        ]);

        // Redirect ke halaman pembayaran
        return redirect()->route('payment', ['orderId' => $order->id]);
    }

    public function payment($orderId)
    {
        $order = Order::findOrFail($orderId);

        // Kirim data ke Midtrans atau layanan pembayaran lainnya
        $paymentUrl = $this->generatePaymentUrl($order);

        return view('checkout.payment', compact('order', 'paymentUrl'));
    }

    private function generatePaymentUrl($order)
    {
        // Integrasikan dengan API pembayaran (contoh: Midtrans)
        return "https://payment-gateway.example.com/pay?order_id={$order->id}";
    }
}
