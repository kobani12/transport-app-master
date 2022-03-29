<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRideStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ride_statuses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('driver_id')->unsigned();
            $table->bigInteger('ride_id')->unsigned();
            $table->string('start_ride');
            $table->string('status');
            $table->string('end_ride');
            $table->timestamps();
            
            $table->foreign('driver_id')->references('id')->on('drivers')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('ride_id')->references('id')->on('rides')->cascadeOnDelete()->cascadeOnUpdate();
        });
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ride_statuses');
    }
}
