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
        Schema::create('configs', function (Blueprint $table) {
            $table->id('id_conf');
            $table->string('name_web');
            $table->string('logo');
            $table->string('favicon');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('youtube');
            $table->text('sambutan');
            $table->text('pesan_1');
            $table->string('icon_1');
            $table->text('pesan_2');
            $table->string('icon_2');
            $table->text('pesan_3');
            $table->string('icon_3');
            $table->text('pesan_4');
            $table->string('icon_4');
            $table->text('sambutan_2');
            $table->text('layanan_medis');
            $table->string('gambar_layanan_medis');
            $table->text('layanan_penunjang');
            $table->string('gambar_layanan_penunjang');
            $table->text('iklan');
            $table->text('news');
            $table->text('footer');
            $table->text('copy_right');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configs');
    }
};
