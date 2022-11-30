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
    $cities = \App\Models\City::get()->take(81);

    return view('tr_map',compact('cities'));
});

Route::get("/iletisim",function (){
    return view("contact");
});

Route::get("/avrupa",function (){
    return view("europa_table");
});

Route::get("/sehirler",function (){
    return view("city_detail");
});
