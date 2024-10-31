<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';

    protected $fillable = ['nama_produk', 'harga', 'stok', 'deskripsi', 'gambar', 'kategori_id', 'created_at', 'updated_at'];

    /**
     * Relasi Many-to-One dengan Kategori
     * Produk dimiliki oleh satu kategori.
     */
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
