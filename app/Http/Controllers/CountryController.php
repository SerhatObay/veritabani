<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function list(){

        $countries=Country::all();


        return view("europa_table",compact("countries"));




    }
}
