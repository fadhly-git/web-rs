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
        Schema::create('galeris', function (Blueprint $table) {
            $table->id('id_galeri');
            $table->unsignedBigInteger('id_kategori_galeri');
            $table->foreignId('id_user')->constrained('users');
            $table->enum('bahasa', ['ID', 'EN']);
            $table->string('judul_galeri')->nullable();
            $table->string('jenis_galeri', 20);
            $table->text('isi')->nullable();
            $table->string('gambar');
            $table->string('website')->nullable();
            $table->integer('hits')->nullable();
            $table->enum('popup_status', ['Publish', 'Draft']);
            $table->integer('urutan')->nullable();
            $table->enum('status_text', ['Ya', 'Tidak']);
            $table->timestamps();
            $table->foreign('id_kategori_galeri')->references('id_kategori_galeri')->on('kategori_galeris');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeris');
    }
};
