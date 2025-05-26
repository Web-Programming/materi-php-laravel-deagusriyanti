<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Dosen;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        $listmateri = Materi::with('dosen')->get();
        return view('materi.index', compact('listmateri'));
    }

    public function create()
    {
        $dosens = Dosen::all();
        return view('materi.create', compact('dosens'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'kode_materi' => 'required|string|max:20',
            'nama_materi' => 'required|string|max:100',
            'dosen_id' => 'required|exists:dosen,id',
        ]);

        Materi::create($data);

        return redirect()->route('materi.index')->with('status', 'Materi berhasil ditambahkan!');
    }

    public function show($id)
    {
        $materi = Materi::with('dosen')->findOrFail($id);
        return view('materi.show', compact('materi'));
    }

    public function edit($id)
    {
        $materi = Materi::findOrFail($id);
        $dosens = Dosen::all();
        return view('materi.edit', compact('materi', 'dosens'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'kode_materi' => 'required|string|max:20',
            'nama_materi' => 'required|string|max:100',
            'dosen_id' => 'required|exists:dosen,id',
        ]);

        $materi = Materi::findOrFail($id);
        $materi->update($data);

        return redirect()->route('materi.index')->with('status', 'Materi berhasil diupdate!');
    }

    public function destroy($id)
    {
        $materi = Materi::findOrFail($id);
        $materi->delete();

        return redirect()->route('materi.index')->with('status', 'Materi berhasil dihapus!');
    }
}
