<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('konfigurasis', function (Blueprint $table) {
            $table->id('id_konfigurasi');
            $table->enum('bahasa', ['ID', 'EN']);
            $table->string('namaweb');
            $table->string('nama_singkat')->nullable();
            $table->string('tagline')->nullable();
            $table->string('tagline2')->nullable();
            $table->text('tentang')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('email_cadangan')->nullable();
            $table->text('alamat')->nullable();
            $table->string('telepon')->nullable();
            $table->string('hp')->nullable();
            $table->string('fax')->nullable();
            $table->string('logo')->nullable();
            $table->string('icon')->nullable();
            $table->string('keywords')->nullable();
            $table->text('metatext')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('google_plus')->nullable();
            $table->string('nama_facebook');
            $table->string('nama_twitter');
            $table->string('nama_instagram');
            $table->string('nama_google_plus');
            $table->string('singkatan');
            $table->text('google_map')->nullable();
            $table->string('judul_1')->nullable();
            $table->string('pesan_1')->nullable();
            $table->string('judul_2')->nullable();
            $table->string('pesan_2')->nullable();
            $table->string('judul_3')->nullable();
            $table->string('pesan_3')->nullable();
            $table->string('judul_4')->nullable();
            $table->string('pesan_4')->nullable();
            $table->string('judul_5')->nullable();
            $table->string('pesan_5');
            $table->string('judul_6')->nullable();
            $table->string('pesan_6');
            $table->string('isi_1')->nullable();
            $table->string('isi_2')->nullable();
            $table->string('isi_3')->nullable();
            $table->string('isi_4')->nullable();
            $table->string('isi_5')->nullable();
            $table->string('isi_6')->nullable();
            $table->string('link_1')->nullable();
            $table->string('link_2')->nullable();
            $table->string('link_3')->nullable();
            $table->string('link_4')->nullable();
            $table->string('link_5')->nullable();
            $table->string('link_6')->nullable();
            $table->text('javawebmedia')->nullable();
            $table->string('gambar')->nullable();
            $table->string('video')->nullable();
            $table->text('rekening')->nullable();
            $table->text('prolog_topik')->nullable();
            $table->text('prolog_program')->nullable();
            $table->text('prolog_sekretariat')->nullable();
            $table->text('prolog_aksi')->nullable();
            $table->text('prolog_kolaborasi')->nullable();
            $table->text('prolog_sebaran')->nullable();
            $table->string('gambar_berita')->nullable();
            $table->text('prolog_agenda')->nullable();
            $table->text('prolog_wawasan')->nullable();
            $table->string('protocol')->nullable();
            $table->string('smtp_host')->nullable();
            $table->string('smtp_port')->nullable();
            $table->string('smtp_timeout')->nullable();
            $table->string('smtp_user')->nullable();
            $table->string('smtp_pass')->nullable();
            $table->string('judul_pembayaran')->nullable();
            $table->text('isi_pembayaran')->nullable();
            $table->string('gambar_pembayaran')->nullable();
            $table->string('link_bawah_peta')->nullable();
            $table->string('text_bawah_peta')->nullable();
            $table->enum('cara_pesan', ['Keranjang Belanja', 'Formulir Pemesanan'])->nullable();
            $table->foreignId('id_user')->nullable()->constrained('users');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konfigurasis');
    }
};
