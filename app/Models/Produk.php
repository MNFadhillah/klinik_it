<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $primaryKey = 'produk_id'; // Kolom primary key

    protected $fillable = ['nama_produk', 'harga', 'stok', 'deskripsi', 'gambar', 'id_spesifikasi', 'kategori_id', 'created_at', 'updated_at'];

    /**
     * Relasi Many-to-One dengan Kategori
     * Produk dimiliki oleh satu kategori.
     */
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    // Produk.php (Model)
    // Relasi ke tabel produk_spesifikasi
    public function spesifikasi()
    {
        return $this->hasOne(ProdukSpesifikasi::class, 'produk_id', 'produk_id');
    }
    
    


    
}
