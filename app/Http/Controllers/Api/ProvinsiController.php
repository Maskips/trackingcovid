<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Kasus2;

class ProvinsiController extends Controller
{
    
    public function index()
    {
        $provinsi = Provinsi::latest()->get();
        $res = [
            'success' => true,
            'data'    => $provinsi,
            'message' => 'Data Provinsi Ditampilkan'
        ];
        return response()->json($res,200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $provinsi = new Provinsi();
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();

        $res = [
            'success' => true,
            'data'    => $provinsi,
            'message' => 'Data Provinsi Ditambahkan'
        ];
        return response()->json($res,200);
    }

    public function show($id)
    {
        $provinsi = Provinsi::whereId($id)->first();
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();

        $res = [
            'success' => true,
            'data'    => $provinsi,
            'message' => 'Data Provinsi Ditampilkan'
        ];
        return response()->json($res,200);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $provinsi = Provinsi::findOrFall($id);
        $provinsi->delete();
        
        if ($provinsi) {
            return response()->json([
                'success' => true,
                'data'    => $provinsi,
                'message' => 'Data Provinsi Dihapus',
            ], 200);
        }
        else {
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal Dihapus',
            ], 200);
        }
    }
}
