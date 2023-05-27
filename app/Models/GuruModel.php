<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruModel extends Model
{
    use HasFactory;
    protected $table = 'guru';
    protected $primaryKey = 'id';
    // protected $keyType = 'int';
    protected $fillable = [
        'kode',
        'nama',
        'foto',
        'jabatan',
    ];

}
