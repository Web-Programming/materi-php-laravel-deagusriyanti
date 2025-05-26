<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\AuthController;

// Redirect root ke halaman login
Route::get('/', function () {
    return redirect()->route('login');
});

// Route penjumlahan dengan 3 parameter angka (contoh bebas)
Route::get('/total/{angka1}/{angka2}/{angka3}', function ($angka1, $angka2, $angka3) {
    $Total = $angka1 + $angka2 + $angka3;
    return view('hasil', compact('angka1', 'angka2', 'angka3', 'Total'));
});

// Routes untuk autentikasi (login dan register) tanpa middleware
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'do_login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'do_register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Group routes yang membutuhkan user sudah login
Route::middleware(['ceklogin'])->group(function () {

    // Dashboard untuk semua user yang sudah login
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Group untuk user dengan level admin
    Route::middleware(['ceklevel:admin'])->group(function () {
        Route::resource('materi', MateriController::class);
        Route::resource('prodi', ProdiController::class);
        Route::resource('fakultas', FakultasController::class);
        Route::resource('mahasiswa', MahasiswaController::class);
        Route::resource('dosen', DosenController::class);
    });

    // Group untuk user dengan level dosen
    Route::middleware(['ceklevel:dosen'])->group(function () {
        Route::resource('materi', MateriController::class);
        Route::resource('mahasiswa', MahasiswaController::class)->only(['index', 'show']);
    });

    // Group untuk user dengan level mahasiswa
    Route::middleware(['ceklevel:mahasiswa'])->group(function () {
        Route::resource('materi', MateriController::class)->only(['index', 'show']);
    });

    // Group untuk user dengan level user (akses terbatas hanya dashboard)
    Route::middleware(['ceklevel:user'])->group(function () {
        // Tidak ada route tambahan, akses dashboard sudah diberikan di atas
    });
});
