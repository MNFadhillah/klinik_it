<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'pesanan';

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'nama_pelanggan',
        'alamat',
        'nomor_telepon',
        'jumlah_barang',
        'total_harga',
        'status',
        'id_pengguna',
    ];

    // Define the relationship to the 'User' model (assuming each pesanan is linked to a user)
    public function pengguna()
    {
        return $this->belongsTo(User::class, 'id_pengguna');
    }
}
