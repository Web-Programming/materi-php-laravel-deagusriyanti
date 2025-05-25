@extends('layout.master')

@section('title', 'Create Prodi')

@section('content')
<div class="container pt-4 mt-5">
    <h3 class="mb-4 text-center"><strong> Tambah Prodi<strong></h3>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary card-outline mb-4">
                <div class="card-header">
                    <div class="card-title">Input Data prodi</div>
                </div>

                <form>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="idprodi" class="form-label">Id_Prodi</label>
                            <input type="text" class="form-control" id="idprodi" placeholder="Masukkan id prodi">
                            {{-- @error(idprodi)
                               <p class ="text-danger">{{ $message }}</p> 
                            @enderror --}}
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Prodi</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Prodi">
                        </div>

                        <div class="mb-3">
                            <label for="fakultas" class="form-label">Id_Fakultas</label>
                            <input type="text" class="form-control" id="fakultas" placeholder="Masukkan Fakultas">
                        </div>

                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ url('/prodi') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
