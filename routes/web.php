<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\About\IndexController as About;
use App\Http\Controllers\Contact\IndexController as Contact;
use App\Http\Controllers\Service\IndexController as Service;
use App\Http\Controllers\News\IndexController as News;
use App\Http\Controllers\Main\MainController as Main;
use App\Http\Controllers\Temp;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Configs;

Route::get('/',[Home::class, 'index'])->name('home');

// About Us Routes with Prefix
Route::group(['prefix'=>'about'], function(){
    Route::get('informasi-umum', [About::class, 'InformasiUmum'])
    ->name('about.informasi-umum');

    Route::get('sejarah', [About::class, 'Sejarah'])
    ->name('about.sejarah');

    Route::get('visi-misi',[About::class, 'VisiMisi'])
    ->name('about.visi-misi');

    Route::get('tim-kami', [About::class, 'TimKami'])
    ->name('about.tim-kami');
});

//route service
Route::group(['prefix'=>'service'], function(){
    Route::get('dokter', [Service::class, 'Doktor'])
    ->name('service.dokter');

    Route::get('poliklinik', [Service::class, 'Poliklinik'])
    ->name('service.poliklinik');

    Route::get('jadwal-dokter', [Service::class, 'JadwalDokter'])
    ->name('service.jadwal-dokter');

    Route::get('fasilitas-umum', [Service::class, 'FasilitasUmum'])
    ->name('service.fasilitas-umum');
});

//route news
Route::group(['prefix'=>'news'], function(){
    Route::get('berita-terkini', [News::class, 'BeritaTerkini'])
    ->name('news.berita-terkini');

    Route::get('galeri-kegiatan', [News::class, 'GaleriKegiatan'])
    ->name('news.galeri-kegiatan');
});

Route::group(['prefix'=>'contact'], function(){
    Route::get('kontak-kami', [Contact::class, 'KontakKami'])
    ->name('contact.kontak-kami');

    Route::get('kritik-saran', [Contact::class, 'KritikSaran'])
    ->name('contact.kritik-saran');

    Route::get('survey-kepuasan', [Contact::class, 'SurveyKepuasan'])
    ->name('contact.survey-kepuasan');
});

// Route api
Route::group(['prefix'=>'api'], function(){
    Route::get('menu-items', [MenuController::class, 'index']);
    Route::get('news', [NewsController::class, 'index']);
    Route::get('news/{slug}', [NewsController::class, 'showApi']);
    Route::get('configs', [Configs::class, 'index']);
});

// route article 
Route::get('article/{slug}', [main::class, 'index']); 

Route::get('temp', [Temp::class, 'index'])->name('temp');





// Service Items Routes with Prefix
Route::prefix('service')->group(function (){

    Route::get('rawat-inap', function () {
        return Inertia::render('Service/RawatInap');
    })->name('service.rawat-inap');

    Route::get('pelayanan-unit-khusus', function () {
        return Inertia::render('Service/PelayananUnitKhusus');
    })->name('service.pelayanan-unit-khusus');

    Route::get('pelayanan-penunjang', function () {
        return Inertia::render('Service/PelayananPenunjang');
    })->name('service.pelayanan-penunjang');

    Route::get('medical-check-up', function () {
        return Inertia::render('Service/MedicalCheckUp');
    })->name('service.medical-check-up');
});

// News Items Routes with Prefix
Route::prefix('news')->group(function (){

    Route::get('health-articles', function () {
        return Inertia::render('News/HealthArticles');
    })->name('news.health-articles');
});


