<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kasus2;
use App\Models\Provinsi;

class ApiController extends Controller
{
    
    public function index()
    {
        //KASUS SELURUH INDONESIA
        $positif = DB::table('rws')
                ->select('kasus2s.jpositif',
                'kasus2s.jsembuh', 'kasus2s.jmeninggal')
                ->join('kasus2s', 'rws.id', "=",'kasus2s.id_rw')
                ->sum('kasus2s.jpositif');
        $sembuh = DB::table('rws')
                ->select('kasus2s.jpositif',
                'kasus2s.jsembuh', 'kasus2s.jmeninggal')
                ->join('kasus2s', 'rws.id', "=", 'kasus2s.id_rw')
                ->sum('kasus2s.jsembuh');
        $meninggal = DB::table('rws')
                ->select('kasus2s.jpositif',
                'kasus2s.jsembuh', 'kasus2s.jmeninggal')
                ->join('kasus2s', 'rws.id', "=", 'kasus2s.id_rw')
                ->sum('kasus2s.jmeninggal');
        $res = [
            'success' => true,
            'Data'             => 'Data Kasus Indonesia',
            'Jumlah Positif'   => $positif,
            'Jumlah Sembuh'    => $sembuh,
            'Jumlah Meninggal' => $meninggal,
            'Message'          => 'Data Kasus Ditampilkan'
        ];
        return response()->json($res, 200);
                
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        // $provinsi   = Provinsi::get()->last();
        // $provinsi   = Provinsi::where('kode_provinsi')->count('kode_provinsi');
        // $provinsi   = Provinsi::where('nama_provinsi')->count('nama_provinsi');
        // $kasus2     = Kasus2::get('created_at')->last();
        // $jpositif   = Kasus2::where('tanggal', date('Y-m-d'))->sum('jpositif');
        // $jsembuh    = Kasus2::where('tanggal', date('Y-m-d'))->sum('jsembuh');
        // $jmeninggal = Kasus2::where('tanggal', date('Y-m-d'))->sum('jmeninggal');

        // $join = DB::table('kasus2s')
        //             ->select('jpositif', 'jsembuh', 'jmeninggal')
        //             ->join('rws' ,'kasus2s.id_rw', '=', 'rws.id')
        //             ->get();
        // $arr1 = [
        //     'kode_provinsi' =>$join->count('kode_provinsi'),
        //     'nama_provinsi' =>$join->count('nama_provinsi'),
        //     'jpositif'      =>$join->sum('jpositif'),
        //     'jsembuh'       =>$join->sum('jsembuh'),
        //     'jmeninggal'    =>$join->sum('jmeninggal'),
        // ];
        // $arr2 = [
        //     'jpositif'   =>$jpositif,
        //     'jsembuh'    =>$jsembuh,
        //     'jmeninggal' =>$jmeninggal,
        // ];
        // $arr = [
        //     'status' => 200,
        //     'data' => [
        //         'total'    => $arr1
        //     ],
        //     'message' => 'Berhasil'
        // ];
        
        // return response()->json($arr, 200);
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
