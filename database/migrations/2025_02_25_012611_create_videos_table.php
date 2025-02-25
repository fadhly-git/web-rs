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
        Schema::create('videos', function (Blueprint $table) {
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
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
