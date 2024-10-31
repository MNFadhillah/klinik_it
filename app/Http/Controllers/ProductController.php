<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    //
    
    public function showByCategory($id)
    {
        $category = Kategori::findOrFail($id); // Ambil kategori berdasarkan ID
        $produk = Produk::where('kategori_id', $id)->get(); // Ambil produk dari kategori
        return view('user.toko.produk', compact('category', 'produk'));
    }

    // public function cart()
    // {
    //     return view('user.toko.cart');
    // }

    // /**
    //  * Menampilkan halaman checkout.
    //  *
    //  * @return \Illuminate\View\View
    //  */
    // public function checkout()
    // {
    //     // Logika untuk memproses checkout
    //     return view('user.toko.checkout');
    // }

    public function addToCart($id)
    {
        $product = Produk::findOrFail($id);

        // Simpan produk di keranjang (menggunakan session)
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->nama_produk,
                "quantity" => 1,
                "price" => $product->harga,
                "image" => $product->gambar
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('toko.cart')->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }


    public function cart()
    {
        $cart = session()->get('cart', []); // Ambil keranjang dari session
        return view('user.toko.cart', compact('cart'));
    }

    public function checkout()
    {
        $cart = session()->get('cart', []); // Ambil keranjang dari session
        $total = array_sum(array_column($cart, 'price')); // Hitung total pembayaran
        return view('user.toko.checkout', compact('cart', 'total'));
    }

    

}
