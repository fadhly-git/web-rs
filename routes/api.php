<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Service\JadwalDokterController as JadwalDokter;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Configs;
use App\Http\Controllers\MenuController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('menu-items', [MenuController::class, 'index']);
Route::get('news', [NewsController::class, 'index']);
Route::get('news/{slug}', [NewsController::class, 'showApi']);
Route::get('configs', [Configs::class, 'index']);
Route::get('doc', [JadwalDokter::class, 'api']);