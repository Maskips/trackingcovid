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

        return view('frontend.welcome', compact('positif', 'sembuh', 'meninggal'));
    }
}
