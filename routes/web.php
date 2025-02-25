<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Livewire\Counter;
 
Route::get('/counter', Counter::class);

Route::get('/', function () {
    return Inertia::render('Dashboard');
})->name('home');
// About Us Routes with Prefix

Route::get('temp', function () {
    return Inertia::render('Temp');
})->name('temp');

Route::prefix('about')->group(function (){
    Route::get('informasi-umum', function () {
        return Inertia::render('About/InformasiUmum');
    })->name('about.informasi-umum');

    Route::get('sejarah', function () {
        return Inertia::render('About/Sejarah');
    })->name('about.sejarah');

    Route::get('visi-misi', function () {
        return Inertia::render('About/VisiMisi');
    })->name('about.visi-misi');

    Route::get('tim-kami', function () {
        return Inertia::render('About/TimKami');
    })->name('about.tim-kami');

    Route::get('indikator-mutu', function () {
        return Inertia::render('About/IndikatorMutu');
    })->name('about.indikator-mutu');
});

// Service Items Routes with Prefix
Route::prefix('service')->group(function (){
    Route::get('dokter', function () {
        return Inertia::render('Service/Dokter');
    })->name('service.dokter');

    Route::get('poliklinik', function () {
        return Inertia::render('Service/Poliklinik');
    })->name('service.poliklinik');

    Route::get('jadwal-dokter', function () {
        return Inertia::render('Service/JadwalDokter');
    })->name('service.jadwal-dokter');

    Route::get('rawat-inap', function () {
        return Inertia::render('Service/RawatInap');
    })->name('service.rawat-inap');

    Route::get('pelayanan-unit-khusus', function () {
        return Inertia::render('Service/PelayananUnitKhusus');
    })->name('service.pelayanan-unit-khusus');

    Route::get('pelayanan-penunjang', function () {
        return Inertia::render('Service/PelayananPenunjang');
    })->name('service.pelayanan-penunjang');

    Route::get('fasilitas-umum', function () {
        return Inertia::render('Service/FasilitasUmum');
    })->name('service.fasilitas-umum');

    Route::get('medical-check-up', function () {
        return Inertia::render('Service/MedicalCheckUp');
    })->name('service.medical-check-up');
});

// News Items Routes with Prefix
Route::prefix('news')->group(function (){
    Route::get('berita-terkini', function () {
        return Inertia::render('News/BeritaTerkini');
    })->name('news.berita-terkini');

    Route::get('health-articles', function () {
        return Inertia::render('News/HealthArticles');
    })->name('news.health-articles');

    Route::get('galeri-kegiatan', function () {
        return Inertia::render('News/GaleriKegiatan');
    })->name('news.galeri-kegiatan');
});

// Contact Items Routes with Prefix
Route::prefix('contact')->group(function (){
    Route::get('kontak-kami', function () {
        return Inertia::render('Contact/KontakKami');
    })->name('contact.kontak-kami');

    Route::get('kritik-saran', function () {
        return Inertia::render('Contact/KritikSaran');
    })->name('contact.kritik-saran');

    Route::get('survey-kepuasan', function () {
        return Inertia::render('Contact/SurveyKepuasan');
    })->name('contact.survey-kepuasan');
});