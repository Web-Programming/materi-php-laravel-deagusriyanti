<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\AuthController;

// Route root, tampilkan halaman home
Route::get('/', function () {
    return view('home');
})->name('layout.home');

// Route penjumlahan dengan 3 parameter angka
Route::get('/total/{angka1}/{angka2}/{angka3}', function ($angka1, $angka2, $angka3) {
    $Total = $angka1 + $angka2 + $angka3;
    return view('hasil', compact('angka1', 'angka2', 'angka3', 'Total'));
});

// Resource routes
Route::resource('materi', MateriController::class);
Route::resource('prodi', ProdiController::class);
Route::resource('fakultas', FakultasController::class);
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('dosen', DosenController::class);

// Authentication routes
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'do_login']);

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'do_register']);
