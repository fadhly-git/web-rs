<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokters';
    protected $primaryKey = 'id_dokter';
    protected $fillable = ['nama_dokter', 'spesialis', 'photo'];
    public $timestamps = false;

    public function jadwal()
    {
        return $this->hasMany(JadwalDokter::class, 'id_dokter', 'id_dokter');
    }
}
