@extends('layout.master')

@section('title', 'Data mhs')

@section('content')
<div class="container-fluid pt-4">
    <h3 class="mb-5 text-center">Data Mahasiswa</h3>

    <div class="row justify-content-center">

      
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4">
            <div class="small-box d-flex flex-column align-items-center justify-content-center text-white"
                style="height: 200px; border-radius: 0.5rem; padding: 1rem; background-color: #E5958E;">
                <div class="inner text-center w-100">
                    <h4 class="mt-2">Manajemen</h4>
                </div>
                <div class="button-group d-flex justify-content-center mt-3 gap-4">
                    <a href="{{ url('/prodi/delete') }}" class="btn btn-sm btn-danger">Delete</a>
                </div>
            </div>
        </div>

       
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4">
            <div class="small-box d-flex flex-column align-items-center justify-content-center text-white"
                style="height: 200px; border-radius: 0.5rem; padding: 1rem; background-color: #E5958E;">
                <div class="inner text-center w-100">
                    <h4 class="mt-2">Akuntansi</h4>
                </div>
                <div class="button-group d-flex justify-content-center mt-3 gap-4">
                    <a href="{{ url('/prodi/delete') }}" class="btn btn-sm btn-danger">Delete</a>
                </div>
            </div>
        </div>

        
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4">
            <div class="small-box d-flex flex-column align-items-center justify-content-center text-white"
                style="height: 200px; border-radius: 0.5rem; padding: 1rem; background-color: #E5958E;">
                <div class="inner text-center w-100">
                    <h4 class="mt-2">Informatika</h4>
                </div>
                <div class="button-group d-flex justify-content-center mt-3 gap-4">
                    <a href="{{ url('/prodi/delete') }}" class="btn btn-sm btn-danger">Delete</a>
                </div>
            </div>
        </div>

     
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4">
            <div class="small-box d-flex flex-column align-items-center justify-content-center text-white"
                style="height: 200px; border-radius: 0.5rem; padding: 1rem; background-color: #E5958E;">
                <div class="inner text-center w-100">
                    <h4 class="mt-2">Sistem Informasi</h4>
                </div>
                <div class="button-group d-flex justify-content-center mt-3 gap-4">
                    <a href="{{ url('/prodi/delete') }}" class="btn btn-sm btn-danger">Delete</a>
                </div>
            </div>
        </div>

      
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4">
            <div class="small-box d-flex flex-column align-items-center justify-content-center text-white"
                style="height: 200px; border-radius: 0.5rem; padding: 1rem; background-color: #E5958E;">
                <div class="inner text-center w-100">
                    <h4 class="mt-2">Teknik Elektro</h4>
                </div>
                <div class="button-group d-flex justify-content-center mt-3 gap-4">
                    <a href="{{ url('/prodi/delete') }}" class="btn btn-sm btn-danger">Delete</a>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4">
            <a href="{{ url('/prodi/create') }}" class="btn btn-primary btn-lg w-100 d-flex align-items-center justify-content-center gap-2">
                Create Dosen
                <svg fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"></path>
                </svg>
            </a>
        </div>

       <div class="col-lg-4 col-md-8 col-sm-6 col-6 mb-4">
    <a href="{{ url('/prodi/detail') }}" class="btn btn-light btn-lg w-75">
        Detail
    </a>
</div>
</div>


    </div>
</div>
@endsection

