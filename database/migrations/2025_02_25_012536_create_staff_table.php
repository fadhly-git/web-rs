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
        Schema::create('staff', function (Blueprint $table) {
            $table->id('id_staff');
            $table->foreignId('id_user')->nullable()->constrained('users');
            $table->unsignedBigInteger('id_kategori_staff');
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

            $table->foreign('id_kategori_staff')->references('id_kategori_staff')->on('kategori_staff');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
