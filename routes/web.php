<?php

use Illuminate\Support\Facades\Route;
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

//Route::get('profile', function (){
   // return view('profile');
//});

Route::get('about/{nama}', function($nama){
    $umur = 10+7;
    return view('about', compact('nama','umur'));
} );

Route::get('order/{a?}/{b?}/{c?}', function ($a = 'Pesan Terlebih Dahulu', $b = null, $c = null){
    return view('order', compact('a','b','c'));
});

Route::get('halo', 'Auth@halo');
Route::get('profile', 'Auth@profile');
Route::get('fb/{perkalian}/{nama}', 'Auth@fb');



Route::get('/blog', 'BlogController@home');
Route::get('blog/tentang', 'BlogController@tentang');
Route::get('blog/kontak', 'BlogController@kontak');
Route::get('nama', 'DataController@siswa');

Route::get('{beratBadan?}/{tinggiBadan?}', 'hitungController@berat');