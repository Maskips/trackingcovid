<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Kasus2;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Rw;

class WelcomeController extends Controller
{

    public function index()
    {
        $positif = DB::table('rws')
                ->select('kasus2s.jpositif', 'kasus2s.jsembuh', 'kasus2s.jmeninggal')
                ->join('kasus2s', 'rws.id', "=",'kasus2s.id_rw')
                ->sum('kasus2s.jpositif');
        $sembuh = DB::table('rws')
                ->select('kasus2s.jpositif', 'kasus2s.jsembuh', 'kasus2s.jmeninggal')
                ->join('kasus2s', 'rws.id', "=", 'kasus2s.id_rw')
                ->sum('kasus2s.jsembuh');
        $meninggal = DB::table('rws')
                ->select('kasus2s.jpositif', 'kasus2s.jsembuh', 'kasus2s.jmeninggal')
                ->join('kasus2s', 'rws.id', "=", 'kasus2s.id_rw')
                ->sum('kasus2s.jmeninggal');

        // $lokal = DB::table('provinsis')
        //     ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
        //     ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
        //     ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
        //     ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
        //     ->join('kasus2s', 'kasus2s.id_rw', '=', 'rws.id')
        //     ->select('nama_provinsi',
        //         DB::raw('sum(kasus2s.jpositif) as jpositif'),
        //         DB::raw('sum(kasus2s.jsembuh) as jsembuh'),
        //         DB::raw('sum(kasus2s.jmeninggal) as jmeninggal'))
        //     ->groupBy('nama_provinsi')
        //     ->get();

        // $lokal2 = file_get_contents('http://localhost:8000/api/today');
        // $getlokal2 = json_decode($lokal2, TRUE);
        
        $global = file_get_contents('https://api.kawalcorona.com/positif');
        $getglobal = json_decode($global, TRUE);

        return view('frontend.welcome', compact('positif', 'sembuh', 'meninggal', 'global', 'getglobal'));
    }
}
