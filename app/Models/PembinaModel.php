<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembinaModel extends Model
{
    use HasFactory;

    protected $table = 'pembina';
    protected $primaryKey = 'id';
    // protected $keyType = 'int';
    protected $fillable = [
        'kode',
        'nama_pembina',
        'ttl',
        'alamat',
        'no_hp',
        'ekstrakulikuler_id',
        'jadwalekstra_id',
        
    ];
    public function ekstrakulikuler(){
        return $this->belongsTo(EkstraModel::class);
    }
    public function jadwalekstra(){
        return $this->belongsTo(JadwalEkstraModel::class);
    }
}
