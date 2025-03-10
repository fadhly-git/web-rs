<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalDokter extends Model
{
    protected $table = 'jadwal_dokters';
    protected $primaryKey = 'id_jadwal';
    protected $fillable = ['id_dokter', 'hari', 'jam_mulai', 'jam_selesai', 'status'];
    public $timestamps = false;

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter', 'id_dokter');
    }
}
