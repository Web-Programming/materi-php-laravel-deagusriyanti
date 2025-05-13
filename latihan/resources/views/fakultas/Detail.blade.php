@extends('layout.master')

@section('title', 'Detail Dosen')

@section('content')
<div class="container pt-4">
    <h4 class="mb-4 text-center">Detail Fakultas</h4>
    <div class="row justify-content-center">
        <div class="col-12 mb-5">
            <div class="card shadow-sm" style="border-radius: 10px;">
                <div class="card-header py-2 bg-primary text-white text-center">
                    <strong>Fakultas Ekonomi dan Bisnis</strong>
                </div>
                <div class="card-body py-3 px-4">
                    <p class="mb-1"><strong>Program Studi:</strong></p>
                    <p class="mb-1"><strong>Manajemen:</strong></p>
                    <p class="mb-5"><strong>Akuntansi:</strong></p>
                </div>
                <div class="card-footer text-end bg-light py-2">
                    <a href="{{ url('/fakultas') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                </div>
            </div>
        </div>
        <div class="col-12 mb-5">
            <div class="card shadow-sm" style="border-radius: 10px;">
                <div class="card-header py-2 bg-primary text-white text-center">
                    <strong>Fakultas Ilmu Komputer dan Rekayasa</strong>
                </div>
                <div class="card-body py-3 px-4">
                    <p class="mb-1"><strong>Program Studi:</strong></p>
                    <p class="mb-1"><strong>Informatika:</strong></p>
                    <p class="mb-1"><strong>Sistem Informasi:</strong></p>
                    <p class="mb-2"><strong>Teknik Elektro:</strong></p>
                </div>
                <div class="card-footer text-end bg-light py-2">
                    <a href="{{ url('/fakultas') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
