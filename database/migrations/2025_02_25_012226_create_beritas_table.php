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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id('id_berita');
            $table->foreignId('id_user')->constrained('users');
            $table->unsignedBigInteger('id_kategori')->default(0);
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

            $table->foreign('id_kategori')->default(0)->references('id_kategori')->on('kategoris');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
