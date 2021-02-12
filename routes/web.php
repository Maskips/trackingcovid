<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinsiController; 
use App\Http\Controllers\KotaController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\RwController;
use App\Http\Controllers\Kasus2Controller;

Route::get('/', function () {
    return view('frontend.welcome');
});

//FRONTEND
use App\Http\Controllers\WelcomeController;
Route::resource('/', WelcomeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('index', function(){
    return view('halo');
});

Route::get('index2', function(){
    return view('helo');
});

Route::get('admin', function(){
    return view('utama');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () 
{

    Route::get('/', function () {
        return view('utama');
    });
    Route::resource('provinsi', ProvinsiController::class);
    Route::resource('kota', KotaController::class);
    Route::resource('kecamatan', KecamatanController::class);
    Route::resource('kelurahan', KelurahanController::class);
    Route::resource('rw', RwController::class);
    Route::resource('kasus2', Kasus2Controller::class);
}
);

//DROPDOWN
Route::view('states-city','livewire.home');

//PROVINSI


//KOTA


//KECAMATAN

//KELURAHAN

//RW

//KASUS2