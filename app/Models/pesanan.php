<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    protected $table = "pesanans";
    protected $primary_key = "id";
    protected $fillable = [
        'nama_pemesan',
        'no_telp',
        'durasi_sewa',
        'jenis_properti',
        'jumlah_harga',
    ];
}
