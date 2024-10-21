<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokoController extends Controller
{
    /**
     * Menampilkan halaman toko.
     *
     * @return \Illuminate\View\View
     */
    public function produk()
    {
        // Logika untuk mengambil data produk, jika diperlukan
        return view('user.toko.produk');
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