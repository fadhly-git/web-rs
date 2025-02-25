<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePkubojaTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id('id_agenda');
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_kategori_agenda')->constrained('kategori_agenda');
            $table->enum('bahasa', ['ID', 'EN']);
            $table->string('slug_agenda');
            $table->string('judul_agenda');
            $table->text('isi');
            $table->string('status_agenda', 20);
            $table->string('jenis_agenda', 20);
            $table->text('keywords')->nullable();
            $table->string('gambar')->nullable();
            $table->string('icon')->nullable();
            $table->integer('hits')->default(0);
            $table->integer('urutan')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->time('jam_mulai')->nullable();
            $table->time('jam_selesai')->nullable();
            $table->text('tempat')->nullable();
            $table->text('google_map')->nullable();
            $table->dateTime('tanggal_post');
            $table->dateTime('tanggal_publish');
            $table->timestamps();
        });

        Schema::create('berita', function (Blueprint $table) {
            $table->id('id_berita');
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_kategori')->default(0)->constrained('kategori');
            $table->enum('bahasa', ['ID', 'EN']);
            $table->string('updater', 32)->default('-');
            $table->string('slug_berita');
            $table->string('judul_berita');
            $table->text('isi');
            $table->string('status_berita', 20);
            $table->string('jenis_berita', 20)->default('Berita');
            $table->text('keywords')->nullable();
            $table->string('gambar')->nullable();
            $table->string('icon')->nullable();
            $table->integer('hits')->nullable();
            $table->integer('urutan')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->dateTime('tanggal_post');
            $table->dateTime('tanggal_publish');
            $table->timestamps();
        });

        Schema::create('download', function (Blueprint $table) {
            $table->id('id_download');
            $table->foreignId('id_kategori_download')->constrained('kategori_download');
            $table->foreignId('id_user')->constrained('users');
            $table->enum('bahasa', ['ID', 'EN']);
            $table->string('judul_download')->nullable();
            $table->string('jenis_download', 20);
            $table->text('isi')->nullable();
            $table->string('gambar');
            $table->string('website')->nullable();
            $table->integer('hits');
            $table->timestamps();
        });

        Schema::create('galeri', function (Blueprint $table) {
            $table->id('id_galeri');
            $table->foreignId('id_kategori_galeri')->constrained('kategori_galeri');
            $table->foreignId('id_user')->constrained('users');
            $table->enum('bahasa', ['ID', 'EN']);
            $table->string('judul_galeri')->nullable();
            $table->string('jenis_galeri', 20);
            $table->text('isi')->nullable();
            $table->string('gambar');
            $table->string('website')->nullable();
            $table->integer('hits')->nullable();
            $table->enum('popup_status', ['Publish', 'Draft', '', '']);
            $table->integer('urutan')->nullable();
            $table->enum('status_text', ['Ya', 'Tidak', '', '']);
            $table->timestamps();
        });

        Schema::create('heading', function (Blueprint $table) {
            $table->id('id_heading');
            $table->foreignId('id_user')->default(0)->constrained('users');
            $table->string('judul_heading')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('gambar')->nullable();
            $table->string('halaman')->default('NULL');
            $table->timestamps();
        });

        Schema::create('kategori', function (Blueprint $table) {
            $table->id('id_kategori');
            $table->foreignId('id_user')->constrained('users');
            $table->enum('bahasa', ['ID', 'EN']);
            $table->string('slug_kategori');
            $table->string('nama_kategori')->unique();
            $table->integer('urutan')->nullable();
            $table->integer('hits')->nullable();
            $table->timestamps();
        });

        Schema::create('kategori_agenda', function (Blueprint $table) {
            $table->id('id_kategori_agenda');
            $table->enum('bahasa', ['ID', 'EN']);
            $table->string('slug_kategori_agenda');
            $table->string('nama_kategori_agenda');
            $table->text('keterangan')->nullable();
            $table->integer('urutan')->nullable();
        });

        Schema::create('kategori_download', function (Blueprint $table) {
            $table->id('id_kategori_download');
            $table->enum('bahasa', ['ID', 'EN']);
            $table->string('slug_kategori_download');
            $table->string('nama_kategori_download');
            $table->text('keterangan')->nullable();
            $table->integer('urutan')->nullable();
        });

        Schema::create('kategori_galeri', function (Blueprint $table) {
            $table->id('id_kategori_galeri');
            $table->enum('bahasa', ['ID', 'EN']);
            $table->string('slug_kategori_galeri');
            $table->string('nama_kategori_galeri');
            $table->integer('urutan')->nullable();
        });

        Schema::create('kategori_staff', function (Blueprint $table) {
            $table->id('id_kategori_staff');
            $table->enum('bahasa', ['ID', 'EN']);
            $table->string('slug_kategori_staff');
            $table->string('nama_kategori_staff');
            $table->text('keterangan')->nullable();
            $table->integer('urutan')->nullable();
        });

        Schema::create('konfigurasi', function (Blueprint $table) {
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

        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->nullable()->constrained('menus')->onDelete('cascade');
            $table->string('name');
            $table->string('url');
            $table->string('icon')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        Schema::create('migrations', function (Blueprint $table) {
            $table->id();
            $table->string('migration');
            $table->integer('batch');
        });

        Schema::create('rekening', function (Blueprint $table) {
            $table->id('id_rekening');
            $table->string('nama_bank');
            $table->string('nomor_rekening');
            $table->string('atas_nama');
            $table->string('gambar');
            $table->integer('urutan')->nullable();
            $table->timestamps();
        });

        Schema::create('staff', function (Blueprint $table) {
            $table->id('id_staff');
            $table->foreignId('id_user')->nullable()->constrained('users');
            $table->foreignId('id_kategori_staff')->constrained('kategori_staff');
            $table->string('slug_staff');
            $table->string('nama_staff');
            $table->string('jabatan')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('expertise')->nullable();
            $table->string('email')->nullable();
            $table->string('telepon')->nullable();
            $table->text('isi')->nullable();
            $table->string('gambar')->nullable();
            $table->string('status_staff', 20);
            $table->string('keywords')->nullable();
            $table->integer('urutan')->nullable();
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('nama');
            $table->string('email');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('akses_level', 20);
            $table->string('kode_rahasia')->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();
        });

        Schema::create('video', function (Blueprint $table) {
            $table->id('id_video');
            $table->string('judul');
            $table->string('posisi');
            $table->text('keterangan')->nullable();
            $table->text('video');
            $table->integer('urutan')->nullable();
            $table->string('bahasa');
            $table->string('gambar')->nullable();
            $table->foreignId('id_user')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda');
        Schema::dropIfExists('berita');
        Schema::dropIfExists('download');
        Schema::dropIfExists('galeri');
        Schema::dropIfExists('heading');
        Schema::dropIfExists('kategori');
        Schema::dropIfExists('kategori_agenda');
        Schema::dropIfExists('kategori_download');
        Schema::dropIfExists('kategori_galeri');
        Schema::dropIfExists('kategori_staff');
        Schema::dropIfExists('konfigurasi');
        Schema::dropIfExists('menus');
        Schema::dropIfExists('migrations');
        Schema::dropIfExists('rekening');
        Schema::dropIfExists('staff');
        Schema::dropIfExists('users');
        Schema::dropIfExists('video');
    }
}