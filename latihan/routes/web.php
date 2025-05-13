<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;

// Route::get('/', function (): view{
//     return view('welcome');
// });

// Route::get('/profile', function (): view{
//     return view('profile');
// });

// Route::get('/about', function (): view{
//     return view('about');
// });

Route::get('/Total/{angka1}/{angka2}/{angka3}', function ($angka1,$angka2,$angka3) {
    $Total = $angka1 + $angka2 + $angka3;
    return view('hasil',compact('angka1','angka2','angka3','Total'));
});

Route::resource('materi', MateriController::class);      // materi untuk controller Materi
Route::resource('prodi', ProdiController::class);        // prodi untuk controller Prodi
Route::resource('fakultas', FakultasController::class);  // fakultas untuk controller Fakultas
Route::resource('mhs', MahasiswaController::class);      // mhs untuk controller Mahasiswa
Route::resource('dosen', DosenController::class);        // dosen untuk controller Dosen

