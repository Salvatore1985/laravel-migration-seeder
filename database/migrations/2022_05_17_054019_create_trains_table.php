<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("Agency", 100);
            $table->string("departure_station", 100);
            $table->string("arrival_station", 100);
            $table->dateTime("departure_time");
            $table->dateTime("Arrival_time");
            $table->tinyInteger("train_code");
            $table->tinyInteger("number_of_carriages");
            $table->boolean("in_time");
            $table->boolean("deleted");
            $table->float('price', 10, 2, true);
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
        Schema::dropIfExists('trains');
    }
}
