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
        $positif = DB::table('rws')
            ->select('kasus2s.positif', 'kasus2s.sembuh', 'kasus2s.meninggal')
            ->join('kasus2s', 'rws.id', '=', 'kasus2s.id_rw')
            ->sum('kasus2s.positif');

        $sembuh = DB::table('rws')
            ->select('kasus2s.positif', 'kasus2s.sembuh', 'kasus2s.meninggal')
            ->join('kasus2s', 'rws.id', '=', 'kasus2s.id_rw')
            ->sum('kasus2s.sembuh');

        $meninggal = DB::table('rws')
            ->select('kasus2s.positif', 'kasus2s.sembuh', 'kasus2s.meninggal')
            ->join('kasus2s', 'rws.id', '=', 'kasus2s.id_rw')
            ->sum('kasus2s.meninggal');

        $res = [
            'success'           => true,
            'Data'              => 'Data Kasus Di Indonesia',
            'Jumlah Positif'    => $positif,
            'Jumlah Sembuh'     => $sembuh,
            'Jumlah Meninngal'  => $meninggal,
            'message'           => 'Data Kasus di Tampilkan'
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
        // $positif = DB::table('provinsis')
        //     ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
        //     ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
        //     ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
        //     ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
        //     ->join('kasus2s', 'kasus2s.id_rw', '=', 'rws.id')
        //     ->select('kasus2s.positif')
        //     ->where('provinsis.id', $id)
        //     ->sum('kasus2s.positif');

        //     $sembuh = DB::table('provinsis')
        //     ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
        //     ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
        //     ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
        //     ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
        //     ->join('kasus2s', 'kasus2s.id_rw', '=', 'rws.id')
        //     ->select('kasus2s.sembuh')
        //     ->where('provinsis.id', $id)
        //     ->sum('kasus2s.sembuh');

        //     $meninggal = DB::table('provinsis')
        //     ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
        //     ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
        //     ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
        //     ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
        //     ->join('kasus2s', 'kasus2s.id_rw', '=', 'rws.id')
        //     ->select('kasus2s.meninggal')
        //     ->where('provinsis.id', $id)
        //     ->sum('kasus2s.meninggal');


        //     $provinsi = provinsi::whereId($id)->first();            
        // $res = [
        //     'success'           => true,
        //     'Data'              => 'Data Kasus Berdasarkan Provinsi',
        //     'Kode Provinsi'     => $provinsi['kode_provinsi'],
        //     'Provinsi'          => $provinsi['nama_provinsi'],
        //     'Jumlah Positif'    => $positif,
        //     'Jumlah Sembuh'     => $sembuh,
        //     'Jumlah Meninngal'  => $meninggal,
        //     'message'           => 'Data Kasus di Tampilkan'
        // ];
        // return response()->json($res, 200);
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