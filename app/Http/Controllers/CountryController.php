<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\CityDetail;
use App\Models\Country;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use function GuzzleHttp\Promise\all;

class CountryController extends Controller
{

    public function list(){

        $countries=Country::paginate(10);
        return view("europa_table",compact("countries"));

    }

public function showFetch(){

        return view('eu');
}

    public function fetchEuropa(){
        $countries = Country::get();
        return DataTables::of($countries)
            ->editColumn('capital',function ($data){
                $capital = $data->getCapital;
                return "<button class='btn btn-secondary dada' onclick='showInfo(" . $capital->id .  ")'>$capital->name</button>";
            })
            ->editColumn('nufus',function ($data){
                $nufus = $data->getCountryDetails->co_population;
                return $nufus;
            })
            ->editColumn('yuzolcumu',function ($data){
                $yuzolcumu = $data->getCountryDetails->co_area;
                return $yuzolcumu;
            })
            ->editColumn('bayrak',function ($data){
                $bayrak = $data->flag;
                return "<img class='img-fluid' src='$bayrak'>";
            })
            ->editColumn('cityNum',function ($data){
                $sehir_sayisi = $data->city_num;
                return $sehir_sayisi;
            })
            ->editColumn('domain',function ($data){
                $domain = $data->domain;
                return $domain;
            })
            ->editColumn('co_area_code',function ($data){
                $co_area_code= $data->co_area_code;
                return $co_area_code;
            })
            ->editColumn('resmi_dili',function ($data){
                $resmi_dili = $data->nt_lang;
                return $resmi_dili;
            })
            ->editColumn('money',function ($data){
                $para_birimi = $data->money;
                return $para_birimi;
            })
            ->editColumn('f_year',function ($data){
                $f_year = $data->f_year;
                return $f_year;
            })

            ->rawColumns(['capital', 'bayrak','nufus'])->make();

    }


    function countryDetail(Request $request)
    {

        $countries = City::where('id',$request->id)->where('isCapital',1)->first();
        return response()->json(['name' => $countries->name,'population'=>$countries->getCityDetails->ci_population,'area'=>$countries->getCityDetails->ci_area, 'license_plate' => $countries->license_plate, 'ci_area_code' => $countries->ci_area_code, 'altitude' => $countries->altitude, 'district_num' => $countries->district_num]);

    }
}
