<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;

class KelurahanController extends Controller
{
    //Session Login
    public function __construct () {
        $this->middleware('auth');
    }

    public function index()
    {
        $kelurahan = Kelurahan::with('kecamatan')->get();
        return view('kelurahan.index', compact('kelurahan'));
    }


    public function create()
    {
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();
        return view('kelurahan.create', compact('kelurahan', 'kecamatan'));
    }

    
    public function store(Request $request)
    {
        //VALIDASI
        $request->validate([
            'kode_kelurahan' => 'required|max:4|unique:kelurahans',
            'nama_kelurahan' => 'required|unique:kelurahans',
        ], [
            'kode_kelurahan.required' => 'Kode Harus Di Isi',
            'kode_kelurahan.max' => 'Kode Maksimal 4 Nomer',
            'kode_kelurahan.unique' => 'Kode Sudah Dipakai',
            'nama_kelurahan.required' => 'Nama Harus Di Isi',
            'nama_kelurahan.unique' => 'Kode Sudah Dipakai',
        ]);

        $kelurahan = new Kelurahan;
        $kelurahan->kode_kelurahan = $request->kode_kelurahan;
        $kelurahan->nama_kelurahan = $request->nama_kelurahan;
        $kelurahan->id_kecamatan = $request->id_kecamatan;
        $kelurahan->save();
        return redirect()->route('kelurahan.index')->with(['message' => 'Data Kelurahan Berhasil Dibuat']);
    }

    public function show($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        $kelurahan = Kelurahan::findOrFail($id);
        return view('kelurahan.show', compact('kelurahan', 'kecamatan'));
    }

    public function edit($id)
    {
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::findOrFail($id);
        return view('kelurahan.edit', compact('kelurahan', 'kecamatan'));
    }

    public function update(Request $request, $id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        $kelurahan->kode_kelurahan = $request->kode_kelurahan;
        $kelurahan->nama_kelurahan = $request->nama_kelurahan;
        $kelurahan->id_kecamatan = $request->id_kecamatan;
        $kelurahan->save();
        return redirect()->route('kelurahan.index')->with(['message' => 'Data Kelurahan Berhasil Diedit']);
    }

    public function destroy($id)
    {
        $kelurahan = Kelurahan::findOrFail($id)->delete();
        return redirect()->route('kelurahan.index')->with(['message' => 'Data Kelurahan Berhasil Dihapus']);
    }
}
