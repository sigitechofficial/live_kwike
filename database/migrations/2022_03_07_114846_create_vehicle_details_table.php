<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_details', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('make');
            $table->string('model');
            $table->string('year');
            $table->string('license_plate');
            $table->string('vehicle_color');
            $table->unsignedBigInteger('vehicle_type');
            $table->foreign('vehicle_type')->references('id')->on('vehicle_types')->onDelete('cascade');
            $table->string('license_front_image');
            $table->string('license_back_image');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_details');
    }
}
