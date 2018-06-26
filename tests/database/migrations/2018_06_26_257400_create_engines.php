<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEngines extends Migration
{
    public function up()
    {
        Schema::create('engines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('horsepower');
            $table->integer('vehicle_id')->unsigned();
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
        });
    }

    public function down()
    {
        Schema::drop('engines');
    }
}