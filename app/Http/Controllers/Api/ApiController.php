<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kasus2;
use App\Models\Rw;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{

    public function index()
    {    
        $provinsi = provinsi::all();
        $tampil = DB::table('provinsis')
            ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
            ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
            ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
            ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
            ->join('kasus2s', 'kasus2s.id_rw', '=', 'rws.id')
            ->select('nama_provinsi', 'kode_provinsi',
                DB::raw('sum(kasus2s.jpositif) as jpositif'),
                DB::raw('sum(kasus2s.jsembuh) as jsembuh'),
                DB::raw('sum(kasus2s.jmeninggal) as jmeninggal'))
            ->groupBy('nama_provinsi', 'kode_provinsi')
            ->get();

            $res = [
                'Success'                   => true,
                'Data Kasus Tiap Provinsi'  => $tampil,
                'Message'                   => 'Data Kasus Ditampilkan'
            ];
        return response()->json($res, 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    //BERDASARKAN ID PROVINSI
    public function provinsi($id) 
    {
        $tampil = DB::table('provinsis')
            ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
            ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
            ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
            ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
            ->join('kasus2s', 'kasus2s.id_rw', '=', 'rws.id')
            ->where('provinsis.id', $id)
            ->select('nama_provinsi',
                DB::raw('sum(kasus2s.jpositif) as jpositif'),
                DB::raw('sum(kasus2s.jsembuh) as jsembuh'),
                DB::raw('sum(kasus2s.jmeninggal) as jmeninggal'))
            ->groupBy('nama_provinsi')
            ->get();
            
            $data = [
                'success'           => true,
                'Data Provinsi'     => $tampil,
                'message'           => 'Data Kasus Berdasarkan Id Provinsi di Tampilkan'
            ];
        return response()->json($data, 200);
    }

    public function show($id)
    {
        // $tampil = DB::table('provinsis')
        //     ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
        //     ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
        //     ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
        //     ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
        //     ->join('kasus2s', 'kasus2s.id_rw', '=', 'rws.id')
        //     ->where('provinsis.id', $id)
        //     ->select('nama_provinsi',
        //         DB::raw('sum(kasus2s.jpositif) as jpositif'),
        //         DB::raw('sum(kasus2s.jsembuh) as jsembuh'),
        //         DB::raw('sum(kasus2s.jmeninggal) as jmeninggal'))
        //     ->groupBy('nama_provinsi')
        //     ->get();
            
        //     $data = [
        //         'success'           => true,
        //         'Data Provinsi'     => $tampil,
        //         'message'           => 'Data Kasus Berdasarkan Id Provinsi di Tampilkan'
        //     ];
        // return response()->json($data, 200);
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
        //
    }
}