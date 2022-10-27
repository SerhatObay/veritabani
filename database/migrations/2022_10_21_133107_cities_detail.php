<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CitiesDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cities_id');
            $table->foreign('cities_id')->references('id')->on('cities');
            $table->bigInteger('ci_population');
            $table->bigInteger('ci_area');
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
        Schema::dropIfExists('cities_detail');
    }
}
