<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class CartController extends Controller
{
    // public function addToCart($produkId)
    // {
    //     // Mendapatkan produk berdasarkan ID
    //     $produk = Produk::findOrFail($produkId);

    //     // Menyimpan produk ke dalam session (keranjang)
    //     $cart = session()->get('cart', []);

    //     // Jika produk sudah ada di keranjang, tambah jumlahnya
    //     if(isset($cart[$produkId])) {
    //         $cart[$produkId]['quantity']++;
    //     } else {
    //         $cart[$produkId] = [
    //             'name' => $produk->nama_produk,
    //             'price' => $produk->harga,
    //             'quantity' => 1,
    //             'image' => $produk->gambar,
    //         ];
    //     }

    //     // Simpan kembali ke session
    //     session()->put('cart', $cart);

    //     // Kembali ke halaman produk dengan pesan sukses
    //     return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    // }

    // public function viewCart($produkId)
    // {
    //     $produk = Produk::findOrFail($produkId);
    //     // Menampilkan halaman keranjang dengan produk-produk yang ada
    //     return view('user.toko.keranjang.index', compact('produk'));
    // }
    
    

    public function addToCart($produkId)
    {
        $produk = Produk::findOrFail($produkId);
        $cart = session()->get('cart', []);
    
        if(isset($cart[$produkId])) {
            if ($cart[$produkId]['quantity'] < $produk->stok) {
                $cart[$produkId]['quantity']++;
            } else {
                return redirect()->back()->with('error', 'Stok produk tidak mencukupi.');
            }
        } else {
            if ($produk->stok > 0) {
                $cart[$produkId] = [
                    'name' => $produk->nama_produk,
                    'price' => $produk->harga,
                    'quantity' => 1,
                    'image' => $produk->gambar,
                ];
            } else {
                return redirect()->back()->with('error', 'Produk tidak tersedia.');
            }
        }
    
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }
    
    public function viewCart()
    {
        $cart = session()->get('cart', []);
        return view('user.toko.keranjang.index', compact('cart'));
    }
    
    public function removeFromCart($produkId)
    {
        $cart = session()->get('cart', []);
    
        if (isset($cart[$produkId])) {
            unset($cart[$produkId]);
            session()->put('cart', $cart);
        }
    
        return redirect()->back()->with('success', 'Produk berhasil dihapus dari keranjang!');
    }
    
//     public function removeFromCart($produkId)
// {
//     $cart = session()->get('cart', []);

//     if (isset($cart[$produkId])) {
//         unset($cart[$produkId]);
//         session()->put('cart', $cart);
//     }

//     return redirect()->back()->with('success', 'Produk berhasil dihapus!');
// }

}
