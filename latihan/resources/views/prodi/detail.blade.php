@extends('layout.master')

@section('title', 'Detail Dosen')

@section('content')
<div class="container pt-4">
    <h4 class="mb-4 text-center">Detail Prodi</h4>

    <div class="row justify-content-center">

        <div class="col-md-5 col-sm-8 col-11 mb-4">
            <div class="card shadow-sm" style="border-radius: 10px;">
                <div class="card-header py-2 bg-primary text-white text-center">
                    <strong>Dosen Sistem Informasi</strong>
                </div>
                <div class="card-body py-3 px-4">
                    <p><strong>Deskripsi:</strong>  Program Studi Sistem Informasi berfokus pada integrasi teknologi informasi dengan proses bisnis untuk meningkatkan efisiensi dan efektivitas organisasi.</p>
                    <p><strong>Akreditasi:</strong> A</p>
                    <p><strong>Dosen Pengampu:</strong></p>
                    <ul>
                        <li>Dr. Andi Wijaya, M.M.</li>
                        <li>Prof. Siti Rahmawati, M.B.A.</li>
                        <li>Ir. Budi Santoso, M.M.</li>
                    </ul>
                </div>
                <div class="card-footer text-end bg-light py-2">
                    <a href="{{ url('/prodi') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                </div>
            </div>
        </div>

   
        <div class="col-md-5 col-sm-8 col-11 mb-4">
            <div class="card shadow-sm" style="border-radius: 10px;">
                <div class="card-header py-2 bg-success text-white text-center">
                    <strong>Informatika</strong>
                </div>
                <div class="card-body py-3 px-4">
                    <p><strong>Deskripsi:</strong>  Program Studi Informatika mempelajari pengembangan perangkat lunak, algoritma, dan teknologi komputer untuk menyelesaikan berbagai masalah komputasi.</p>
                    <p><strong>Akreditasi:</strong> A</p>
                    <p><strong>Dosen Pengampu:</strong></p>
                    <ul>
                        <li>Dr. Andi Wijaya, M.M.</li>
                        <li>Prof. Siti Rahmawati, M.B.A.</li>
                        <li>Ir. Budi Santoso, M.M.</li>
                    </ul>
                </div>
                <div class="card-footer text-end bg-light py-2">
                    <a href="{{ url('/prodi') }}" class="btn btn-sm btn-outline-success">Kembali</a>
                </div>
            </div>
        </div>

       
        <div class="col-md-5 col-sm-8 col-11 mb-4">
            <div class="card shadow-sm" style="border-radius: 10px;">
                <div class="card-header py-2 bg-danger text-white text-center">
                    <strong>Akuntansi</strong>
                </div>
                <div class="card-body py-3 px-4">
                    <p><strong>Deskripsi:</strong>Program Studi Akuntansi mempelajari pencatatan, pengelolaan, dan pelaporan keuangan dalam organisasi untuk mendukung pengambilan keputusan yang tepat.</p>
                    <p><strong>Akreditasi:</strong> A</p>
                    <p><strong>Dosen Pengampu:</strong></p>
                    <ul>
                        <li>Dr. Andi Wijaya, M.M.</li>
                        <li>Prof. Siti Rahmawati, M.B.A.</li>
                        <li>Ir. Budi Santoso, M.M.</li>
                    </ul>
                </div>
                <div class="card-footer text-end bg-light py-2">
                    <a href="{{ url('/prodi') }}" class="btn btn-sm btn-outline-danger">Kembali</a>
                </div>
            </div>
        </div>

        {{-- Dosen 4 --}}
        <div class="col-md-5 col-sm-8 col-11 mb-4">
            <div class="card shadow-sm" style="border-radius: 10px;">
                <div class="card-header py-2 bg-warning text-white text-center">
                    <strong>Manajemen</strong>
                </div>
                <div class="card-body py-3 px-4">
                    <p><strong>Deskripsi:</strong> Program Studi Manajemen mempelajari tentang pengelolaan sumber daya manusia, keuangan, dan operasional perusahaan untuk mencapai tujuan organisasi secara efektif dan efisien.</p>
                    <p><strong>Akreditasi:</strong> A</p>
                    <p><strong>Dosen Pengampu:</strong></p>
                    <ul>
                        <li>Dr. Andi Wijaya, M.M.</li>
                        <li>Prof. Siti Rahmawati, M.B.A.</li>
                        <li>Ir. Budi Santoso, M.M.</li>
                    </ul>
                </div>
                <div class="card-footer text-end bg-light py-2">
                    <a href="{{ url('/prodi') }}" class="btn btn-sm btn-outline-warning">Kembali</a>
                </div>
            </div>
        </div>

        
        <div class="col-md-5 col-sm-8 col-11 mb-4">
            <div class="card shadow-sm" style="border-radius: 10px;">
                <div class="card-header py-2 bg-secondary text-white text-center">
                    <strong>Teknik Elektro</strong>
                </div>
                <div class="card-body py-3 px-4">
                    <p><strong>Deskripsi:</strong> Program Studi Teknik Elektro mempelajari desain, pengembangan, dan penerapan sistem listrik dan elektronik dalam berbagai bidang teknologi modern.</p>
                    <p><strong>Akreditasi:</strong> A</p>
                    <p><strong>Dosen Pengampu:</strong></p>
                    <ul>
                        <li>Dr. Andi Wijaya, M.M.</li>
                        <li>Prof. Siti Rahmawati, M.B.A.</li>
                        <li>Ir. Budi Santoso, M.M.</li>
                    </ul>
                </div>
                <div class="card-footer text-end bg-light py-2">
                    <a href="{{ url('/prodi') }}" class="btn btn-sm btn-outline-secondary">Kembali</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
