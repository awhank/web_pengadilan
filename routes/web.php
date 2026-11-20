<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Portal Resmi Pengadilan Agama
| Sesuai SK Dirjen Badilag Nomor: 2722/DJA/SK.TI1/X/2026
|--------------------------------------------------------------------------
*/

// 1. Menu Beranda (Home)
Route::get('/', function () {
    return view('home');
})->name('home');

// 2. Menu Profil Pengadilan
Route::get('/profil', function () {
    return view('profil');
})->name('profil');

// 3. Menu Layanan Hukum (Kepaniteraan)
Route::get('/layanan-hukum', function () {
    return view('layanan-hukum');
})->name('layanan.hukum');

// 4. Menu Transparansi (Kesekretariatan)
Route::get('/transparansi', function () {
    return view('transparansi');
})->name('transparansi');

// 5. Menu Layanan Publik & Pengaduan
Route::get('/layanan-publik', function () {
    return view('layanan-publik');
})->name('layanan.publik');

// 6. Menu Berita dan Publikasi
Route::get('/berita', function () {
    return view('berita');
})->name('berita');

// Panel Admin (CMS Prototype)
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});
