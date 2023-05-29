<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrestasiModel extends Model
{
    use HasFactory;
    protected $table = 'prestasi';
    protected $primaryKey = 'id';
    // protected $keyType = 'int';
    protected $fillable = [
        'kode',
        'foto',
        'keterangan',
    ];
}
