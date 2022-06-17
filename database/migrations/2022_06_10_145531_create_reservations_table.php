<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('doctor_id', false, true);
            $table->foreign('doctor_id')->references('id')->on('doctors');

            $table->bigInteger('patient_id', false, true);
            $table->foreign('patient_id')->references('id')->on('patients');

            $table->bigInteger('medical_center_id', false, true);
            $table->foreign('medical_center_id')->references('id')->on('medical_centers');

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
        Schema::dropIfExists('reservations');
    }
};