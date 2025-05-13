<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller

{
    // Tampilkan semua data fakultas
    public function index()
    {
        $data = Fakultas::all();
        return view('fakultas.index', compact('data'));
    }

    // Tampilkan form tambah fakultas
    public function create()
    {
        return view('fakultas.create');
    }

    // Simpan data fakultas baru
    public function store(Request $request)
    {
        
    }

    // Tampilkan detail fakultas
    public function show($id)
    {
        return view('fakultas.detail');
    }

    // Tampilkan form edit fakultas
    public function edit($id)
    {
       
    }

    // Update data fakultas
    public function update(Request $request, $id)
    {
       
    }

    // Hapus data fakultas
    public function destroy($id)
    {
       
    }
}