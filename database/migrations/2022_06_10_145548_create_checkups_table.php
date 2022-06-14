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
        Schema::create('checkups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ckeckup_name');
            $table->string('ckeckup_price');
            $table->string('ckeckup_time');

            $table->bigInteger('doctor_id' , false ,true);
            $table->foreign('doctor_id')->references('id')->on('doctors');

            $table->bigInteger('patient_id' , false ,true);
            $table->foreign('patient_id')->references('id')->on('patients');

            $table->bigInteger('lab_id' , false ,true);
            $table->foreign('lab_id')->references('id')->on('labs');

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('checkups');
    }
};