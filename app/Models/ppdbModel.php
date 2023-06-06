<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpdbModel extends Model
{
    use HasFactory;
    protected $table = 'ppdb'; // Nama tabel yang sesuai dengan struktur tabel

    protected $fillable = [
        'foto',
    ];
}
