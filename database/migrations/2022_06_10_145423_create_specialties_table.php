<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('specialties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('specialtie_name');
            // $table->bigInteger('medical_center_id' , false ,true);
            // $table->foreign('medical_center_id')->references('id')->on('medical_centers');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('specialties');
    }
};