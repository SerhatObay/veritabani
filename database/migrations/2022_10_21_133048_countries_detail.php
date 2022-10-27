<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CountriesDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries_detail', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('countries_id');
            $table->foreign('countries_id')->references('id')->on('countries');
            $table->bigInteger('co_population');
            $table->bigInteger('co_area');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries_detail');
    }
}
