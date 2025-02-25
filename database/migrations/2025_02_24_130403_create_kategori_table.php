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
        Schema::create('kategoris', function (Blueprint $table) {
            $table->id('id_kategori');
            $table->foreignId('id_user')->constrained('users');
            $table->enum('bahasa', ['ID', 'EN']);
            $table->string('slug_kategori');
            $table->string('nama_kategori')->unique();
            $table->integer('urutan')->nullable();
            $table->integer('hits')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategoris');
    }
};
