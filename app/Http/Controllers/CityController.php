<?php

namespace App\Http\Controllers;

use App\Models\CityDetail;
use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index(){
        $cities = City::get()->take(81);
        $cities_detail = CityDetail::get()->take(81);



        return view('tr_map',compact('cities',"cities_detail"));
    }
}
