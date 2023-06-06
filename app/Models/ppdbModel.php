<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ppdbModel extends Model
{
    use HasFactory;
    protected $table = 'ppdb';
    protected $primaryKey = 'id';
    // protected $keyType = 'int';
    protected $fillable = [
        'foto',
    ];
}
