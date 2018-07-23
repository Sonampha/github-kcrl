<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_routes', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('origin_point')->unsigned();
			$table->integer('destin_point')->unsigned();
			$table->foreign('origin_point')->references('id')->on('destinations')->onDelete('cascade');
			$table->foreign('destin_point')->references('id')->on('destinations')->onDelete('cascade');
            $table->string('flight_code');
            $table->string('depart_time');
            $table->string('arrive_time');
            $table->string('day_of_week');
            $table->string('aircraft_type');
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
        Schema::dropIfExists('flight_routes');
    }
}
