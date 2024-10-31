<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servis extends Model
{
    use HasFactory;

    protected $table = 'formulir'; // Nama tabel di database
    protected $fillable = [
        'formulir_id', 'nama', 'no_hp', 'alamat', 'jenis_servis', 'masalah', 'tanggal_masuk', 'status'
    ];

    protected $primaryKey = 'formulir_id';

}
