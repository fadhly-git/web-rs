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
        Schema::create('headings', function (Blueprint $table) {
            $table->id('id_heading');
            $table->foreignId('id_user')->default(0)->constrained('users');
            $table->string('judul_heading')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('gambar')->nullable();
            $table->string('halaman')->default('NULL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('headings');
    }
};
