<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Http\Controllers\DependentDropdown;
use App\Http\Controllers\DB;
use Laravolt\Indonesia\Models\Province;


class ProvinsiController extends Controller
{
    //Session Login
    public function __construct () {
        $this->middleware('auth');
    }

    public function index()
    {
        $provinsi = Provinsi::all();
        return view('provinsi.index', compact('provinsi'));
    }

    public function create()
    {
        $provinsi = Provinsi::all();
        $provinces = Province::all();
        return view('provinsi.create', compact('provinsi', 'provinces'));
    }

    public function store(Request $request)
    {
        //VALIDASI
        $request->validate([
            'kode_provinsi' => 'required|max:4|unique:provinsis',
            'nama_provinsi' => 'required|unique:provinsis',
        ], [
            'kode_provinsi.required' => 'Kode Harus Di Isi',
            'kode_provinsi.max' => 'Kode Maksimal 4 Nomer',
            'kode_provinsi.unique' => 'Kode Sudah Dipakai',
            'nama_provinsi.required' => 'Nama Provinsi Harus Di Isi',
            'nama_provinsi.unique' => 'Kode Sudah Dipakai',
        ]);

        $provinsi = new Provinsi;
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index');
    }

    public function show($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.show', compact('provinsi'));
    }

    public function edit($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.edit', compact('provinsi'));
    }

    public function update(Request $request, $id)
    {
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index')->with(['message' => 'Data Provinsi Berhasil Diedit']);
    }

    public function destroy($id)
    {
        $provinsi = Provinsi::findOrFail($id)->delete();
        return redirect()->route('provinsi.index')->with(['message' => 'Data Provinsi Berhasil Dihapus']);
    }
}
