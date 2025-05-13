@extends('layout.master')

@section('title', 'Detail Dosen')

@section('content')
<div class="container pt-4">
    <h4 class="mb-4 text-center">Detail Dosen</h4>

    <div class="row justify-content-center">

        {{-- Dosen 1 --}}
        <div class="col-md-5 col-sm-8 col-11 mb-4">
            <div class="card shadow-sm" style="border-radius: 10px;">
                <div class="card-header py-2 bg-primary text-white text-center">
                    <strong>Dosen Sistem Informasi</strong>
                </div>
                <div class="card-body py-3 px-4">
                    <p class="mb-1"><strong>NIP:</strong> 1987654321</p>
                    <p class="mb-1"><strong>Nama:</strong> Dr. Joy</p>
                    <p class="mb-1"><strong>Fakultas:</strong> Fakultas Teknologi Informasi</p>
                    <p class="mb-1"><strong>Program Studi:</strong> Sistem Informasi</p>
                </div>
                <div class="card-footer text-end bg-light py-2">
                    <a href="{{ url('/dosen') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                </div>
            </div>
        </div>

        {{-- Dosen 2 --}}
        <div class="col-md-5 col-sm-8 col-11 mb-4">
            <div class="card shadow-sm" style="border-radius: 10px;">
                <div class="card-header py-2 bg-success text-white text-center">
                    <strong>Dosen Informatika</strong>
                </div>
                <div class="card-body py-3 px-4">
                    <p class="mb-1"><strong>NIP:</strong> 1987001234</p>
                    <p class="mb-1"><strong>Nama:</strong> Prof. Bing Bong</p>
                    <p class="mb-1"><strong>Fakultas:</strong> Fakultas Teknologi Informasi</p>
                    <p class="mb-1"><strong>Program Studi:</strong> Informatika</p>
                </div>
                <div class="card-footer text-end bg-light py-2">
                    <a href="{{ url('/dosen') }}" class="btn btn-sm btn-outline-success">Kembali</a>
                </div>
            </div>
        </div>

        {{-- Dosen 3 --}}
        <div class="col-md-5 col-sm-8 col-11 mb-4">
            <div class="card shadow-sm" style="border-radius: 10px;">
                <div class="card-header py-2 bg-danger text-white text-center">
                    <strong>Dosen Akuntansi</strong>
                </div>
                <div class="card-body py-3 px-4">
                    <p class="mb-1"><strong>NIP:</strong> 1987123456</p>
                    <p class="mb-1"><strong>Nama:</strong> Dr. Sadness</p>
                    <p class="mb-1"><strong>Fakultas:</strong> Fakultas Ekonomi</p>
                    <p class="mb-1"><strong>Program Studi:</strong> Akuntansi</p>
                </div>
                <div class="card-footer text-end bg-light py-2">
                    <a href="{{ url('/dosen') }}" class="btn btn-sm btn-outline-danger">Kembali</a>
                </div>
            </div>
        </div>

        {{-- Dosen 4 --}}
        <div class="col-md-5 col-sm-8 col-11 mb-4">
            <div class="card shadow-sm" style="border-radius: 10px;">
                <div class="card-header py-2 bg-warning text-white text-center">
                    <strong>Dosen Manajemen</strong>
                </div>
                <div class="card-body py-3 px-4">
                    <p class="mb-1"><strong>NIP:</strong> 1987012345</p>
                    <p class="mb-1"><strong>Nama:</strong> Dr. Fear</p>
                    <p class="mb-1"><strong>Fakultas:</strong> Fakultas Ekonomi</p>
                    <p class="mb-1"><strong>Program Studi:</strong> Manajemen</p>
                </div>
                <div class="card-footer text-end bg-light py-2">
                    <a href="{{ url('/dosen') }}" class="btn btn-sm btn-outline-warning">Kembali</a>
                </div>
            </div>
        </div>

        {{-- Dosen 5 --}}
        <div class="col-md-5 col-sm-8 col-11 mb-4">
            <div class="card shadow-sm" style="border-radius: 10px;">
                <div class="card-header py-2 bg-secondary text-white text-center">
                    <strong>Dosen Teknik Elektro</strong>
                </div>
                <div class="card-body py-3 px-4">
                    <p class="mb-1"><strong>NIP:</strong> 1987098765</p>
                    <p class="mb-1"><strong>Nama:</strong> Prof. Anger</p>
                    <p class="mb-1"><strong>Fakultas:</strong> Fakultas Teknik</p>
                    <p class="mb-1"><strong>Program Studi:</strong> Teknik Elektro</p>
                </div>
                <div class="card-footer text-end bg-light py-2">
                    <a href="{{ url('/dosen') }}" class="btn btn-sm btn-outline-secondary">Kembali</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
