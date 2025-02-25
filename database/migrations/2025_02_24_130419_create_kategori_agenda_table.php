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
        Schema::create('kategori_agendas', function (Blueprint $table) {
            $table->id('id_kategori_agenda');
            $table->enum('bahasa', ['ID', 'EN']);
            $table->string('slug_kategori_agenda');
            $table->string('nama_kategori_agenda');
            $table->text('keterangan')->nullable();
            $table->integer('urutan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_agendas');
    }
};
