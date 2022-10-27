<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedBigInteger('countries_id');
            $table->foreign('countries_id')->references('id')->on('countries');
            $table->tinyInteger("isCapital")->default(0)->comment('0:Başkent Değil 1:Başkent');
            $table->string("license_plate")->nullable();
            $table->string("ci_area_code")->nullable();
            $table->integer("altitude");
            $table->integer("district_num")->nullable();
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
        Schema::dropIfExists('cities');
    }
}
