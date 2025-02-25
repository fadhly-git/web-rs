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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id('id_agenda');
            $table->foreignId('id_user')->constrained('users');
            $table->unsignedBigInteger('id_kategori_agenda');
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

            $table->foreign('id_kategori_agenda')->references('id_kategori_agenda')->on('kategori_agendas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
