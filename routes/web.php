<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LihatNilaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('salam', function () {
    return ("ASSALAMUALAIKUM SELAMAT BELAJAR LARAVEL");
});
//tambah routing dengan parameter
Route::get('/staff/{nama}/{divisi}', function ($nama, $divisi) {
    return 'Nama Pegawai : '.$nama. '<br> Departemen : '.$divisi;
});

//Routing dengan memanggil nama file dari view
Route::get('/kondisi', function () {
    return view('kondisi');
});
Route::get('/nilai', function(){
    return view('coba.nilai');
});

//routing dengan view dan array data
Route::get('/daftarnilai', function (){
    return view ('coba.daftar');
});
//routing manggil dari class controller

Route::get('/dataMahasiswa', [LihatNilaiController::class, 'dataMahasiswa']);