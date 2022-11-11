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
    return view('homepage');
});
Route::get('/test',[\App\Http\Controllers\Api\CityController::class,'store']);

Route::get('/tr',function (){
    return view('tr_map');
});

Route::get("/iletisim",function (){
    return view("contact");
});

Route::get("/europa",function (){
    return view("europa_table");
});

Route::get('/oturumukapat','App\Http\Controllers\Yonetim\KullaniciController@oturumukapat')->name('yonetim.oturumukapat');
