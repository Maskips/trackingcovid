<?php

use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\ApiController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//API PROVINSI
Route::get('provinsi', [ProvinsiController::class, 'index']);
Route::post('provinsi', [ProvinsiController::class, 'store']);
Route::get('provinsi{id}', [ProvinsiController::class, 'show']);
Route::delete('provinsi{id}', [ProvinsiController::class, 'destroy']);

Route::get('seluruh', [ApiController::class, 'index']);
Route::get('join/{id}', [ApiController::class, 'show']);