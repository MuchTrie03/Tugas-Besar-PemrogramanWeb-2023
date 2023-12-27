<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $table = 'members'; // Sesuaikan nama tabel di database jika perlu

    // Definisi kolom-kolom atau properti lainnya
    protected $fillable = [
        'id_member',
        'nama_member',
        'jenis_kelamin',
        'alamat',
        'no_telp',
    ];

    // Jika Anda tidak menggunakan kolom timestamp (created_at dan updated_at)
    public $timestamps = false;
}
