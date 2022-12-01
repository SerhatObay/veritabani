<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryDetail extends Model
{
    use HasFactory;
    protected $table="countries_detail";
    protected $primaryKey="id";
    protected $guarded =[];
}
