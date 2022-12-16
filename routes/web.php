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

Route::get('/tr',[\App\Http\Controllers\CityController::class,"index"]

);


Route::get('/avrupa',[\App\Http\Controllers\CountryController::class,"list"]);


Route::get('/eu',[\App\Http\Controllers\CountryController::class,"showFetch"])->name('showFetch');
Route::get('/deneme',[\App\Http\Controllers\CountryController::class,"fetchEuropa"])->name('countryFetch');
Route::get('/detail',[\App\Http\Controllers\CountryController::class,"countryDetail"])->name('countryDetail');

Route::get("/sehirler",function (){
    return view("city_detail");
});
