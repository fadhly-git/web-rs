<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\About\IndexController as About;
use App\Http\Controllers\Contact\IndexController as Contact;
use App\Http\Controllers\Service\IndexController as Service;
use App\Http\Controllers\News\IndexController as News;
use App\Http\Controllers\Main\MainController as Main;
use App\Http\Controllers\Temp;
use Illuminate\Support\Facades\Route;

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

    Route::get('pelayanan-unit-khusus',[Service::class, 'PelayanUnitKhusus'])
    ->name('service.pelayanan-unit-khusus');

    Route::get('pelayanan-penunjang', [Service::class, 'PelayananPenunjang'])
    ->name('service.pelayanan-penunjang');

    Route::get('medical-check-up', [Service::class, 'MedicalCheckUp'])
    ->name('service.medical-check-up');
});

//route news
Route::group(['prefix'=>'news'], function(){
    Route::get('berita-terkini', [News::class, 'BeritaTerkini'])
    ->name('news.berita-terkini');

    Route::get('galeri-kegiatan', [News::class, 'GaleriKegiatan'])
    ->name('news.galeri-kegiatan');

    Route::get('health-article', [News::class, 'HealthArticle'])
    ->name('news.health-article');
});

Route::group(['prefix'=>'contact'], function(){
    Route::get('kontak-kami', [Contact::class, 'KontakKami'])
    ->name('contact.kontak-kami');

    Route::get('kritik-saran', [Contact::class, 'KritikSaran'])
    ->name('contact.kritik-saran');

    Route::get('survey-kepuasan', [Contact::class, 'SurveyKepuasan'])
    ->name('contact.survey-kepuasan');
});


// route article 
Route::get('article/{slug}', [main::class, 'index']); 

Route::get('temp', [Temp::class, 'index'])->name('temp');



