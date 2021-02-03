<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Kasus2;
use App\Models\Kota;

class ProvinsiController extends Controller
{
    
    public function index()
    {
        $positif = DB::table('provinsis')
                ->select('kasus2s.jpositif',
                'kasus2s.jsembuh', 'kasus2s.jmeninggal')
                ->join('kasus2s', 'provinsis.id', "=",'kasus2s.id_rw')
                ->sum('kasus2s.jpositif');
        $sembuh = DB::table('provinsis')
                ->select('kasus2s.jpositif',
                'kasus2s.jsembuh', 'kasus2s.jmeninggal')
                ->join('kasus2s', 'provinsis.id', "=", 'kasus2s.id_rw')
                ->sum('kasus2s.jsembuh');
        $meninggal = DB::table('provinsis')
                ->select('kasus2s.jpositif',
                'kasus2s.jsembuh', 'kasus2s.jmeninggal')
                ->join('kasus2s', 'provinsis.id', "=", 'kasus2s.id_rw')
                ->sum('kasus2s.jmeninggal');
        $res = [
            'success' => true,
            'Data'             => 'Data Kasus Provinsi',
            'Jumlah Positif'   => $positif,
            'Jumlah Sembuh'    => $sembuh,
            'Jumlah Meninggal' => $meninggal,
            'Message'          => 'Data Kasus Ditampilkan'
        ];
        return response()->json($res, 200);
    }

    public function provinsi($id) 
    {
        $provinsi = Provinsi::whereId($id)->first();

        if ($provinsi) {
            return response()->json([
                'success' => true,
                'Total Data Kasus'    => $provinsi->sum('kasus2.jpositif'),
                'message' => 'Data Kasus Sesuai Id Provinsi',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'data'    => $provinsi,
                'message' => 'Data Kasus Sesuai Id Provinsi Tidak Ditemukan!',
            ], 401);
        }
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
        if ($provinsi) {
            return response()->json([
                'status' => true,
                'Total Data Kota' => $provinsi->count(),
                'Total Data positif' => $provinsi->count(),
                'data' => $provinsi,
                'message' => '^ isi post ^'
            ],200);
        }
        else {
            return response()->json([
                'status' => false,
                'data' => '',
                'message' => 'data tak ditemukan'
            ],404);
        }
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
