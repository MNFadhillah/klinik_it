<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB; // Import DB facade

class TokoController extends Controller
{
    /**
     * Menampilkan halaman toko.
     *
     * @return \Illuminate\View\View
     */
    public function produk()
    {
        // Mengambil semua produk dari tabel 'products'
        $produk = Produk::all();
        return view('user.toko.produk', ['produk' => $produk]);
    }

    /**
     * Menampilkan halaman keranjang belanja.
     *
     * @return \Illuminate\View\View
     */
    public function cart()
    {
        return view('user.toko.cart');
    }

    /**
     * Menampilkan halaman checkout.
     *
     * @return \Illuminate\View\View
     */
    public function checkout()
    {
        // Logika untuk memproses checkout
        return view('user.toko.checkout');
    }

    /**
     * Menambahkan item ke keranjang belanja.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function addToCart(Request $request)
    // {
    //     // Logika untuk menambahkan item ke keranjang
    //     // ...

    //     return redirect()->back()->with('success', 'Item berhasil ditambahkan ke keranjang');
    // }

}