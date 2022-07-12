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
            $table->string('company', 20);
            $table->string('departure_station', 30);
            $table->string('arrival_station', 30);
            $table->dateTime('departure');
            $table->dateTime('arrival');
            $table->string('train_code', 10);
            $table->unsignedTinyInteger('n_wagons');
            $table->boolean('on_time')->default(true);
            $table->boolean('is_cancelled')->default(false);

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
