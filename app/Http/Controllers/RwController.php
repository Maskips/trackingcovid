<?php

namespace App\Http\Controllers;

use App\Models\Rw;
use App\Models\Kelurahan;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class RwController extends Controller
{
    //Session Login
    public function __construct () {
        $this->middleware('auth');
    }

    public function index()
    {
        $rw = Rw::with('kelurahan')->get();
        return view('rw.index', compact('rw'));
    }


    public function create()
    {
        $kelurahan = Kelurahan::all();
        $rw = Rw::all();
        return view('rw.create', compact('rw', 'kelurahan'));
    }

    
    public function store(Request $request)
    {
        //VALIDASI
        $request->validate([
            'nama_rw' => 'required|unique:rws',
        ], [
            'nama_rw.required' => 'Kode Harus Di Isi',
            'nama_rw.max' => 'Kode Maksimal 4 Nomer',
            'nama_rw.unique' => 'Kode Sudah Dipakai',
        ]);

        $rw = new rw;
        $rw->nama_rw = $request->nama_rw;
        $rw->id_kelurahan = $request->id_kelurahan;
        $rw->save();
        return redirect()->route('rw.index')->with(['message' => 'Data Rw Berhasil Dibuat']);
    }

    public function show($id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        $rw = Rw::findOrFail($id);
        return view('rw.show', compact('rw', 'kelurahan'));
    }

    public function edit($id)
    {
        $kelurahan = Kelurahan::all();
        $rw = Rw::findOrFail($id);
        return view('rw.edit', compact('rw', 'kelurahan'));
    }

    public function update(Request $request, $id)
    {
        $rw = Rw::findOrFail($id);
        $rw->nama_rw = $request->nama_rw;
        $rw->id_kelurahan = $request->id_kelurahan;
        $rw->save();
        return redirect()->route('rw.index')->with(['message' => 'Data Rw Berhasil Diedit']);
    }

    public function destroy($id)
    {
        $rw = Rw::findOrFail($id)->delete();
        return redirect()->route('rw.index')->with(['message' => 'Data Rw Berhasil Dihapus']);
    }
}
