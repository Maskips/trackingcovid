<?php

namespace App\Http\Controllers;

use App\Models\Kasus2;
use App\Models\Rw;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;

class Kasus2Controller extends Controller
{
    //Session Login
    public function __construct () {
        $this->middleware('auth');
    }

    public function index()
    {
        $kasus2 = Kasus2::with('rw')->get();
        return view('kasus2.index', compact('kasus2'));
    }


    public function create()
    {
        $rw = Rw::all();
        $kasus2 = Kasus2::all();
        return view('kasus2.create', compact('kasus2', 'rw'));
    }

    
    public function store(Request $request)
    {
        //VALIDASI
        $request->validate([
            'jpositif' => 'required|max:6:kasus2s',
            'jmeninggal' => 'required|max:6:kasus2s',
            'jsembuh' => 'required|max:6:kasus2s',
            'tanggal' => 'required:kasus2s',
        ], [
            'jpositif.required' => 'Jumlah Harus Di Isi',
            'jpositif.max' => 'Jumlah Maksimal 6 Nomer',

            'jmeninggal.required' => 'Jumlah Harus Di Isi',
            'jmeninggal.max' => 'Jumlah Maksimal 6 Nomer',

            'jsembuh.required' => 'Jumlah Harus Di Isi',
            'jsembuh.max' => 'Jumlah Maksimal 6 Nomer',

            'tanggal.required' => 'Jumlah Harus Di Isi',
            'tanggal.max' => 'Jumlah Maksimal 6 Nomer',
        ]);

        $kasus2 = new Kasus2;
        $kasus2->jpositif = $request->jpositif;
        $kasus2->jmeninggal = $request->jmeninggal;
        $kasus2->jsembuh = $request->jsembuh;
        $kasus2->tanggal = $request->tanggal;
        $kasus2->id_rw = $request->id_rw;
        $kasus2->save();
        return redirect()->route('kasus2.index')->with(['message' => 'Data Kasus2 Berhasil Dibuat']);
    }

    public function show($id)
    {
        $rw = Rw::findOrFail($id);
        $kasus2 = Kasus2::findOrFail($id);
        return view('kasus2.show', compact('kasus2', 'rw'));
    }

    public function edit($id)
    {
        $rw = Rw::all();
        $kasus2 = Kasus2::findOrFail($id);
        return view('kasus2.edit', compact('kasus2', 'rw'));
    }

    public function update(Request $request, $id)
    {
        $kasus2 = Kasus2::findOrFail($id);
        $kasus2->jpositif = $request->jpositif;
        $kasus2->jmeninggal = $request->jmeninggal;
        $kasus2->jsembuh = $request->jsembuh;
        $kasus2->tanggal = $request->tanggal;
        $kasus2->id_rw = $request->id_rw;
        $kasus2->save();
        return redirect()->route('kasus2.index')->with(['message' => 'Data Kasus2 Berhasil Diedit']);
    }

    public function destroy($id)
    {
        $kasus2 = Kasus2::findOrFail($id)->delete();
        return redirect()->route('kasus2.index')->with(['message' => 'Data Kasus2 Berhasil Dihapus']);
    }
}
