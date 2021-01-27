<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kota;
use App\Models\Provinsi;
use App\Http\Controllers\DB;


class KotaController extends Controller
{
    //Session Login
    public function __construct () {
        $this->middleware('auth');
    }

    public function index()
    {
        $kota = Kota::with('provinsi')->get();
        return view('kota.index', compact('kota'));
    }

    public function create()
    {
        $provinsi = Provinsi::all();
        $kota = Kota::all();
        return view('kota.create', compact('kota', 'provinsi'));
    }

    public function store(Request $request)
    {
        //VALIDASI
        $request->validate([
            'kode_kota' => 'required|max:4|unique:kotas',
            'nama_kota' => 'required|unique:kotas',
        ], [
            'kode_kota.required' => 'Kode Harus Di Isi',
            'kode_kota.max' => 'Kode Maksimal 4 Nomer',
            'kode_kota.unique' => 'Kode Sudah Dipakai',
            'nama_kota.required' => 'Nama Harus Di Isi',
            'nama_kota.unique' => 'Kode Sudah Dipakai',
        ]);

        $kota = new Kota;
        $kota->kode_kota = $request->kode_kota;
        $kota->nama_kota = $request->nama_kota;
        $kota->id_provinsi = $request->id_provinsi;
        $kota->save();
        return redirect()->route('kota.index')->with(['message' => 'Data kota Berhasil Dibuat']);
    }

    public function show($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        $kota = Kota::findOrFail($id);
        return view('kota.show', compact('kota', 'provinsi'));
    }

    public function edit($id)
    {
        $provinsi = Provinsi::all();
        $kota = Kota::findOrFail($id);
        return view('kota.edit', compact('kota', 'provinsi'));
    }

    public function update(Request $request, $id)
    {
        $kota = Kota::findOrFail($id);
        $kota->kode_kota = $request->kode_kota;
        $kota->nama_kota = $request->nama_kota;
        $kota->id_provinsi = $request->id_provinsi;
        $kota->save();
        return redirect()->route('kota.index')->with(['message' => 'Data kota Berhasil Diedit']);
    }

    public function destroy($id)
    {
        $kota = Kota::findOrFail($id)->delete();
        return redirect()->route('kota.index')->with(['message' => 'Data kota Berhasil Dihapus']);
    }
}
