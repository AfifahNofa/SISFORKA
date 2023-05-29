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
        'foto',
        'tanggal_publish',
    ];
}
