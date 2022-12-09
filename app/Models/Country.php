<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'countries';
    protected $primaryKey="id";
    protected $guarded =[];


public function getCountryDetails(){
    return $this->hasOne('App\Models\CountryDetail','id');
}
    public function getCapital(){
        return $this->hasOne('App\Models\City','countries_id','id')->where('isCapital','1');
    }


}
