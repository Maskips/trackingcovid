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
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Carbon;

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
        $provinsi = DB::table('kasus2s')
                ->select('kode_provinsi','nama_provinsi',
                        DB::raw('SUM(kasus2s.jpositif) as jpositif'),
                        DB::raw('SUM(kasus2s.jsembuh) as jsembuh'),
                        DB::raw('SUM(kasus2s.jmeninggal) as jmeninggal'))
                ->join('rws', 'rws.id', '=', 'kasus2s.id_rw')
                ->join('kelurahans', 'kelurahans.id', '=', 'rws.id_kelurahan')
                ->join('kecamatans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
                ->join('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
                ->join('provinsis', 'provinsis.id', '=', 'kotas.id_provinsi')
                ->groupBy('nama_provinsi','kode_provinsi')
                ->get();

        // $url = Http::get('https://api.kawalcorona.com/')->json();
        // $global = file_get_contents('https://api.kawalcorona.com/positif');
        // $getglobal = json_decode($global, TRUE);
        
        $tanggal = Carbon::now()->format(' d F Y, H:i');

        return view('frontend.welcome', compact('positif', 'sembuh', 'meninggal', 'provinsi', 'tanggal'));
    }
}
