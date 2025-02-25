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
        Schema::create('downloads', function (Blueprint $table) {
            $table->id('id_download');
            $table->unsignedBigInteger('id_kategori_download');
            $table->foreignId('id_user')->constrained('users');
            $table->enum('bahasa', ['ID', 'EN']);
            $table->string('judul_download')->nullable();
            $table->string('jenis_download', 20);
            $table->text('isi')->nullable();
            $table->string('gambar');
            $table->string('website')->nullable();
            $table->integer('hits');
            $table->timestamps();

            $table->foreign('id_kategori_download')->references('id_kategori_download')->on('kategori_downloads');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('downloads');
    }
};
