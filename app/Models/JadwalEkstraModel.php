<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalEkstraModel extends Model
{
    use HasFactory;
    protected $table = 'jadwalekstra';
    protected $primaryKey = 'id';
    // protected $keyType = 'int';
    protected $fillable = [
        'kode',
        'hari',
        'jam',
    ];
    public function pembina(){
        return $this->hasOne(PembinaModel::class);
    }
}
