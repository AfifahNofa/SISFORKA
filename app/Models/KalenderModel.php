<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KalenderModel extends Model
{
    use HasFactory;
    protected $table = 'kalender'; // Nama tabel yang sesuai dengan struktur tabel

    protected $fillable = [
        'foto',
    ];
}
