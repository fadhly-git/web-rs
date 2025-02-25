<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Konfigurasi extends Model
{
    protected $primaryKey = 'id_konfigurasi';

    protected $fillable =[
        'bahasa',
        'namaweb',
        'nama_singkat',
        'tagline',
        'tagline2',
        'tentang',
        'deskripsi',
        'website',
        'email',
        'email_cadangan',
        'alamat',
        'telepon',
        'hp',
        'fax',
        'logo',
        'icon',
        'keywords',
        'metatext',
        'facebook',
        'twitter',
        'instagram',
        'google_plus',
        'nama_facebook',
        'nama_twitter',
        'nama_instagram',
        'nama_google_plus',
        'singkatan',
        'google_map',
        'judul_1',
        'pesan_1',
        'judul_2',
        'pesan_2',
        'judul_3',
        'pesan_3',
        'judul_4',
        'pesan_4',
        'judul_5',
        'pesan_5',
        'judul_6',
        'pesan_6',
        'isi_1',
        'isi_2',
        'isi_3',
        'isi_4',
        'isi_5',
        'isi_6',
        'link_1',
        'link_2',
        'link_3',
        'link_4',
        'link_5',
        'link_6',
        'javawebmedia',
        'gambar',
        'video',
        'rekening',
        'prolog_topik',
        'prolog_program',
        'prolog_sekretariat',
        'prolog_aksi',
        'prolog_kolaborasi',
        'prolog_sebaran',
        'gambar_berita',
        'prolog_agenda',
        'prolog_wawasan',
        'protocol',
        'smtp_host',
        'smtp_port',
        'smtp_timeout',
        'smtp_user',
        'smtp_pass',
        'judul_pembayaran',
        'isi_pembayaran',
        'gambar_pembayaran',
        'link_bawah_peta',
        'text_bawah_peta',
        'cara_pesan',
        'id_user'
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(Users::class, 'id_user');
    }
}
