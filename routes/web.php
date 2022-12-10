<?php

use App\Http\Controllers\ClientController; // Irasyta rankiniu budu
use Illuminate\Support\Facades\Route; // Irasyta rankiniu budu

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/namuDarbas', function () { //dabar neveiks, nes yra nurodyti kintaieji
    return view('namuDarbas1');
});

Route::get('/metodas/index1','ClientController@index'); //veikia
Route::get('/metodas/index2',[ClientController::class, 'index']); // neveika
Route::get('/metodas/index3','App\Http\Controllers\ClientController@index'); // neveikia
Route::get('/metodas/create','ClientController@create'); //veikia
Route::get('/metodas/show','ClientController@show'); //veikia
Route::get('/metodas/edit','ClientController@edit'); // veikia
Route::get('/metodas/edit2', [ClientController::class, 'edit']);
Route::get('/metodas/sandauga',[ClientController::class, 'sandauga']);
Route::get('/metodas/lentele', [ClientController::class, 'index']);



