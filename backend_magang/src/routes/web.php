<?php

use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'index']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/detailberita/{id}', [FrontendController::class, 'detailberita'])->name('detail.berita');
Route::get('/infopangan', [FrontendController::class, 'infopangan']);

Route::middleware(['auth'])->group(function () {
    Route::post('/komentar/{berita}', [FrontendController::class, 'store'])->name('komentar.store');
    Route::post('/balasan/{komentar}', [FrontendController::class, 'storebalasan'])->name('balasan.store');
    Route::post('/berita/{berita}/save',   [FrontendController::class, 'saveBerita'])
         ->name('berita.save');
    Route::post('/berita/{berita}/unsave', [FrontendController::class, 'unsaveBerita'])
         ->name('berita.unsave');

    // Lihat daftar saved
    Route::get('/saved', [FrontendController::class, 'savedList'])
         ->name('berita.saved');
    Route::put('/profile', [FrontendController::class, 'update'])
         ->name('profile.update');
});
