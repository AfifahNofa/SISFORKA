<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KontakModel extends Model
{
    use HasFactory;
    protected $table = 'kontak'; // Nama tabel yang sesuai dengan struktur tabel

    protected $fillable = [
        'nama',
        'email',
        'no_telp',
        'pesan',
    ];
}
