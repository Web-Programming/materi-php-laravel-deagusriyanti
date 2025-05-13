@extends('layout.master')

@section('title', 'Hapus Dosen')

@section('content')
<div class="container pt-4">
    <h3 class="mb-4 text-center text-danger">Konfirmasi Hapus Dosen</h3>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-outline card-danger">
                <div class="card-body">
                    <p>Apakah kamu yakin ingin menghapus dosen berikut?</p>
                    <ul>
                        <li><strong>NIP:</strong> 1987654321</li>
                        <li><strong>Nama:</strong> Dr. Joy</li>
                        <li><strong>Fakultas:</strong> Fakultas Teknologi Informasi</li>
                        <li><strong>Program Studi:</strong> Sistem Informasi</li>
                    </ul>
                </div>
                <div class="card-footer text-end">
                    <a href="{{ url('/dosen') }}" class="btn btn-secondary">Batal</a>
                    <button class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
