<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{
    use HasFactory;

    protected $table = 'artikel'; // Nama tabel yang sesuai dengan struktur tabel

    protected $fillable = [
        'kode',
        'judul',
        'ket',
        'foto',
        'tanggal_publish',
        'url',
    ];
}
