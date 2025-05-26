<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data dosen beserta relasi prodi (jika ada)
        $listdosen = Dosen::with('prodi')->get();

        // Gunakan view 'dosen.index' dan kirim variabel 'listdosen'
        return view('dosen.index', ['listdosen' => $listdosen]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil semua data prodi untuk dropdown pilihan prodi
        $prodis = Prodi::all();

        // Kirim data prodi ke view 'dosen.create'
        return view('dosen.create', ['prodis' => $prodis]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi form input
        $data = $request->validate([
            'kode_dosen' => 'required|string|min:2|max:6',
            'nama' => 'required|string|min:5|max:25',
            'prodi_id' => 'required|exists:prodis,id',
        ]);

        // Simpan data dosen ke database menggunakan model Dosen (bukan Prodi)
        Dosen::create($data);

        // Redirect ke halaman dosen dengan pesan sukses
        return redirect()->route('dosen.index')->with('status', 'Dosen berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Cari dosen berdasarkan id beserta relasi prodi
        $dosen = Dosen::with('prodi')->find($id);

        if (!$dosen) {
            return redirect()->route('dosen.index')->with('failed', 'Dosen tidak ditemukan!');
        }

        return view('dosen.show', ['dosen' => $dosen]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dosen = Dosen::find($id);
        if (!$dosen) {
            return redirect()->route('dosen.index')->with('failed', 'Dosen tidak ditemukan!');
        }

        // Ambil semua prodi untuk pilihan dropdown
        $prodis = Prodi::all();

        return view('dosen.edit', [
            'dosen' => $dosen,
            'prodis' => $prodis
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input
        $data = $request->validate([
            'kode_dosen' => 'required|string|min:2|max:6',
            'nama' => 'required|string|min:5|max:25',
            'prodi_id' => 'required|exists:prodis,id',
        ]);

        $dosen = Dosen::find($id);
        if (!$dosen) {
            return redirect()->route('dosen.index')->with('failed', 'Dosen tidak ditemukan!');
        }

        // Update data dosen
        $dosen->update($data);

        return redirect()->route('dosen.index')->with('status', 'Dosen berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dosen = Dosen::find($id);

        if ($dosen) {
            $dosen->delete();
            return redirect()->route('dosen.index')->with('status', 'Dosen berhasil dihapus!');
        }

        return redirect()->route('dosen.index')->with('failed', 'Dosen gagal dihapus!');
    }
}
