<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $primaryKey = 'id';
    // protected $keyType = 'int';
    protected $fillable = [
        'kelas',
        'jumlah',
        'guru_id',
    ];

    public function guru(){
        return $this->belongsTo(GuruModel::class);
    }

}
