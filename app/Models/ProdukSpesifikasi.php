<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukSpesifikasi extends Model
{
    use HasFactory;
    protected $table = 'produk_spesifikasi';
    protected $primaryKey = 'id_spesifikasi'; // Kolom primary key
    protected $fillable = ['produk_id', 'isi_spesifikasi', 'created_at', 'updated_at'];
    
    // Relasi ke tabel produk
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_spesifikasi', 'id_spesifikasi');
    }



}
