<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriAgenda extends Model
{
    protected $table = 'kategori_agendas';
    protected $primaryKey = 'id_kategori_agenda';
    public $timestamps = false;

    protected $fillable = [
        'bahasa',
        'slug_kategori_agenda',
        'nama_kategori_agenda',
        'keterangan',
        'urutan',
    ];

    public function agendas()
    {
        return $this->hasMany(Agenda::class, 'id_kategori_agenda');
    }
}
