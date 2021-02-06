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
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{

    public function index($id)
    {    
        //BERDASARKAN ID PROVINSI
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

            $res = [
                'Success'                   => true,
                'Data Kasus Tiap Provinsi'  => $tampil,
                'Message'                   => 'Data Kasus Ditampilkan'
            ];
        return response()->json($res, 200);
    }

    //BERDASARKAN DATA API GLOBAL
    public function global() 
    {
        $response = Http::get('https://api.kawalcorona.com/')->json();
        $data = [
            'Success'            => true,
            'Data Api Global'   => $response,
            'Message'           => 'Data Api Global Ditampilkan'        
        ];
        return response()->json($data, 200);
    }

    //BERDASARKAN DATA API GLOBAL (ID, NAMA NEGARA, POSITIF, NEGATIF, MENINGGAL)
    public function global2() 
    {        
        $response = Http::get('https://api.kawalcorona.com/')->json();
        $data = [];
        foreach ($response as $key => $value) {
            $ul = $value['attributes'];
            $res = [
                'id '=>$ul['OBJECTID'],
                'Country'=>$ul['Country_Region'],
                'Confirmed'=>$ul['Confirmed'],
                'Deaths'=>$ul['Deaths'],
                'Recovered'=>$ul['Recovered'],
            ];
            array_push($data,$res);
 
        }
        $response = [
            'success' => true,
            'country' =>$data,
            'message'=> ' Data berhasil ditampilkan',
        ];
        return response()->json($response,200);
 
     }

    //BERDASARKAN KASUS DARI TIAP PROVINSI
    public function provinsi() 
    {
        $tampil_prov = DB::table('provinsis')
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
            
            $data = [
                'success'           => true,
                'Data Provinsi'     => $tampil_prov,
                'message'           => 'Data Kasus Berdasarkan Id Provinsi di Tampilkan'
            ];
        return response()->json($data, 200);
    }

    //BERDASARKAN KASUS DARI TIAP KOTA
    public function kota() 
    {
        $tampil_kota = DB::table('kotas')
            ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
            ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
            ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
            ->join('kasus2s', 'kasus2s.id_rw', '=', 'rws.id')
            ->select('nama_kota', 'kode_kota',
                DB::raw('sum(kasus2s.jpositif) as jpositif'),
                DB::raw('sum(kasus2s.jsembuh) as jsembuh'),
                DB::raw('sum(kasus2s.jmeninggal) as jmeninggal'))
            ->groupBy('nama_kota', 'kode_kota')
            ->get();
            
            $data = [
                'success'           => true,
                'Data Kota'     => $tampil_kota,
                'message'           => 'Data Kasus Berdasarkan Id Kota di Tampilkan'
            ];
        return response()->json($data, 200);
    }

    //BERDASARKAN KASUS DARI TIAP KECAMATAN
    public function kecamatan() 
    {
        $tampil_kec = DB::table('kecamatans')
            ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
            ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
            ->join('kasus2s', 'kasus2s.id_rw', '=', 'rws.id')
            ->select('nama_kecamatan', 'kode_kecamatan',
                DB::raw('sum(kasus2s.jpositif) as jpositif'),
                DB::raw('sum(kasus2s.jsembuh) as jsembuh'),
                DB::raw('sum(kasus2s.jmeninggal) as jmeninggal'))
            ->groupBy('nama_kecamatan', 'kode_kecamatan')
            ->get();
            
            $data = [
                'success'           => true,
                'Data Kecamatan'     => $tampil_kec,
                'message'           => 'Data Kasus Berdasarkan Id Kecamatan di Tampilkan'
            ];
        return response()->json($data, 200);
    }

    //BERDASARKAN KASUS DARI TIAP KECAMATAN
    public function kelurahan() 
    {
        $tampil_kel = DB::table('kelurahans')
            ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
            ->join('kasus2s', 'kasus2s.id_rw', '=', 'rws.id')
            ->select('nama_kelurahan', 'kode_kelurahan',
                DB::raw('sum(kasus2s.jpositif) as jpositif'),
                DB::raw('sum(kasus2s.jsembuh) as jsembuh'),
                DB::raw('sum(kasus2s.jmeninggal) as jmeninggal'))
            ->groupBy('nama_kelurahan', 'kode_kelurahan')
            ->get();
            
            $data = [
                'success'           => true,
                'Data Kelurahan'     => $tampil_kel,
                'message'           => 'Data Kasus Berdasarkan Id Kelurahan di Tampilkan'
            ];
        return response()->json($data, 200);
    }

    //BERDASARKAN KASUS DARI HARI INI
    public function today() 
    {
        $kasus2 = Kasus2::get('created_at')->last();
        $jpositif = Kasus2::where('tanggal', date('Y-m-d'))->sum('jpositif');
        $jsembuh = Kasus2::where('tanggal', date('Y-m-d'))->sum('jsembuh');
        $jmeninggal = Kasus2::where('tanggal', date('Y-m-d'))->sum('jmeninggal');

        $kips = DB::table('kasus2s')
            ->select('jpositif', 'jsembuh', 'jmeninggal')
            ->join('rws', 'kasus2s.id_rw', '=', 'rws.id')
            ->get();

        $total = DB::table('kasus2s')
            ->select(
                DB::raw('sum(kasus2s.jpositif) as jpositif'),
                DB::raw('sum(kasus2s.jsembuh) as jsembuh'),
                DB::raw('sum(kasus2s.jmeninggal) as jmeninggal'))
            ->whereDate('kasus2s.tanggal', date('Y-m-d'))
            ->groupby('kasus2s.id')
            ->get();
        
        $total2 = [
            'Data' => 'DATA SELURUH KASUS INDONESIA',
            'jpositif' => $kips->sum('jpositif'),
            'jsembuh' => $kips->sum('jsembuh'),
            'jmeninggal' => $kips->sum('jmeninggal'),
        ];
        
        

        $arr = [
            'Status'    => 200,
            'Data'      => [ 
            'Hari Ini'  => $total,
            'Total'     => $total2
            ],
        'Message' => 'Berhasil Lurde'
        ];
        return response()->json($arr, 200);
    }

    public function show($id)
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

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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