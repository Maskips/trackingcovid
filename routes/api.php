<?php

use App\Models\Provinsi;
use App\Models\Kota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\ApiController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//PROVINSI
Route::get('provinsi', [ProvinsiController::class, 'index']);
Route::post('provinsi', [ProvinsiController::class, 'store']);
Route::get('provinsi/{id}', [ProvinsiController::class, 'show']);
Route::delete('provinsi/{id}', [ProvinsiController::class, 'destroy']);
Route::get('api/{id}', [ProvinsiController::class, 'provinsi']);

//APIPROVINSI
Route::get('index/{id}', [ApiController::class, 'index']);
Route::get('show/{id}', [ApiController::class, 'show']);
Route::get('provinsi', [ApiController::class, 'provinsi']);
Route::get('kota', [ApiController::class, 'kota']);
Route::get('kecamatan', [ApiController::class, 'kecamatan']);
Route::get('kelurahan', [ApiController::class, 'kelurahan']);
Route::get('today', [ApiController::class, 'today']);