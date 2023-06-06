<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaranaModel extends Model
{
    use HasFactory;
    protected $table = 'sarana';
    protected $primaryKey = 'id';
    // protected $keyType = 'int';
    protected $fillable = [
        'judul',
        'foto',
        'ket',
    ];
}
