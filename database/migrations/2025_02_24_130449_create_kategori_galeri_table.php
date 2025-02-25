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
        Schema::create('kategori_galeris', function (Blueprint $table) {
            $table->id('id_kategori_galeri');
            $table->enum('bahasa', ['ID', 'EN']);
            $table->string('slug_kategori_galeri');
            $table->string('nama_kategori_galeri');
            $table->integer('urutan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_galeris');
    }
};
