<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function list(){

        $countries=Country::paginate(10);
        return view("europa_table",compact("countries"));

    }
}
