@extends('layout.master')

@section('title', "Halaman Detail Prodi")

@section('content')
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Dosen</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ url("/") }}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ url("/prodi") }}">Dosen</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create Dosen</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-12">
                <!-- Default box -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Dosen</h3>
                    <div class="card-tools">
                      <button
                        type="button"
                        class="btn btn-tool"
                        data-lte-toggle="card-collapse"
                        title="Collapse"
                      >
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                      </button>
                      <button
                        type="button"
                        class="btn btn-tool"
                        data-lte-toggle="card-remove"
                        title="Remove"
                      >
                        <i class="bi bi-x-lg"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <form action="{{ url("/dosen")}}" method="post">
                      @csrf
                      <div class="">
                        <label class="">Program Studi</label>
                        <select class="form-control" name="fakultas_id">
                          <option value="">Pilih prodi</option>
                          @foreach ($prodis as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                          @endforeach
                        </select>
                        
                        @error("kode_dosen")
                          <p class="text-danger"> {{ $message }} </p>
                        @enderror
                      </div> 
                      <div class="">
                        <label class="">Kode Dosen</label>
                        <input class="form-control" type="text" name="kode_dosen" value="{{ old("kode_dosen") }}">
                        @error("kode_dosen")
                          <p class="text-danger"> {{ $message }} </p>
                        @enderror
                      </div>   
                      <div class="">
                        <label class="">Nama Dosen</label>
                        <input class="form-control" type="text" name="nama" value="{{ old("nama") }}">
                        @error("nama")
                          <p class="text-danger"> {{ $message }} </p>
                        @enderror
                      </div>                            
                      <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">Footer</div>
                  <!-- /.card-footer-->
                </div>
                <!-- /.card -->
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
@endsection