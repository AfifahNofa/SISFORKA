<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkstraModel extends Model
{
    use HasFactory;
    protected $table = 'ekstrakulikuler';
    protected $primaryKey = 'id';
    // protected $keyType = 'int';
    protected $fillable = [
        'kode',
        'nama',
        'foto',
        'materi',
        'target',
    ];
    public function pembina(){
        return $this->hasMany(PembinaModel::class);
    }
}
