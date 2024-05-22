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
        Schema::create('trains', function (Blueprint $table) {

            $table->id();
            $table->string('operator', 50);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code', 10)->unique();
            $table->tinyInteger('wagons');
            $table->boolean('in_time');
            $table->boolean('cancelled');
            $table->timestamps();

            //Azienda
            //Stazione di partenza
            //Stazione di arrivo
            //Orario di partenza
            //Orario di arrivo
            //Codice Treno
            //Numero Carrozze
            //In orario
            //Cancellato
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
};
