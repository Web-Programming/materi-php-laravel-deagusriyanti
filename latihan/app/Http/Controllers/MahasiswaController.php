<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $listmahasiswa = Mahasiswa::with('prodi')->get();
        return view('mahasiswa.index', compact('listmahasiswa'));
    }

    public function create()
    {
        $prodis = Prodi::all();
        return view('mahasiswa.create', compact('prodis'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'npm' => 'required|string|max:15|unique:mahasiswa,npm',
            'nama' => 'required|string|max:100',
            'prodi_id' => 'required|exists:prodis,id',
        ]);

        Mahasiswa::create($data);

        return redirect()->route('mahasiswa.index')->with('status', 'Mahasiswa berhasil ditambahkan!');
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::with('prodi')->findOrFail($id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $prodis = Prodi::all();
        return view('mahasiswa.edit', compact('mahasiswa', 'prodis'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $data = $request->validate([
            'npm' => 'required|string|max:15|unique:mahasiswa,npm,' . $mahasiswa->id,
            'nama' => 'required|string|max:100',
            'prodi_id' => 'required|exists:prodis,id',
        ]);

        $mahasiswa->update($data);

        return redirect()->route('mahasiswa.index')->with('status', 'Mahasiswa berhasil diupdate!');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('status', 'Mahasiswa berhasil dihapus!');
    }
}
