<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('test', function(){
    return view('layouts.includes.footer');
});

Route::get('test2', function(){
    return view('layouts.includes.sidebar');
}); 

Route::get('test3', function(){
    return view('layouts.includes.navbar');
});

Route::get('index', function(){
    return view('halo');
});

Route::get('index2', function(){
    return view('helo');
});

Route::get('admin', function(){
    return view('utama');
});

//PROVINSI
// Route::group(['prefix' => 'admin','middleware'=>['auth']], function() {
//     Route::resource('provinsi', ProvinsiController::class);
// });

use App\Http\Controllers\ProvinsiController;
Route::resource('provinsi', ProvinsiController::class);

//KOTA
use App\Http\Controllers\KotaController;
Route::resource('kota', KotaController::class);

//KECAMATAN
use App\Http\Controllers\KecamatanController;
Route::resource('kecamatan', KecamatanController::class);

//KELURAHAN
use App\Http\Controllers\KelurahanController;
Route::resource('kelurahan', KelurahanController::class);

//RW
use App\Http\Controllers\RwController;
Route::resource('rw', RwController::class);

//KASUS2
use App\Http\Controllers\Kasus2Controller;
Route::resource('kasus2', Kasus2Controller::class);