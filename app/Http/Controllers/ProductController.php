<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Container\Attributes\Auth;

class ProductController extends Controller
{ 

    public function detail($id)
    {
        $category = Kategori::all();
        // Ambil data produk berdasarkan ID
        $produk = Produk::with('spesifikasi', 'kategori')->findOrFail($id);
    
        // Ambil produk terkait berdasarkan kategori yang sama, kecuali produk yang sedang dilihat
        $produkTerkait = Produk::where('kategori_id', $produk->category_id)
                                ->where('produk_id', '!=', $id)
                                ->take(4) // Ambil maksimal 4 produk terkait
                                ->get();
    
        return view('user.toko.detail', compact('produk', 'produkTerkait', 'category'));
    }
    

    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $product = Produk::find($request->id);

            if (!$product) {
                return response()->json(['success' => false, 'message' => 'Produk tidak ditemukan.']);
            }

            if ($product->stok >= $request->quantity) {
                $cart[$request->id]["quantity"] = $request->quantity;
                session()->put('cart', $cart);
                session(['cart_count' => count($cart)]);
                return response()->json(['success' => true]);
            }

            return response()->json(['success' => false, 'message' => 'Stok tidak mencukupi. Stok tersedia: ' . $product->stok]);
        }
    }


    public function removeFromCart(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
                session(['cart_count' => count($cart)]);
            }
            return response()->json(['success' => true]);
        }
    }

    
// TokoController.php
    public function showspesifikasi($id)
    {
        $produk = Produk::with('spesifikasi')->findOrFail($id);
        return view('toko.detail', compact('produk'));
    }



    
//
  
}