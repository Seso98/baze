<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliceOfficersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('police_officers', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->string('surname',30);
            $table->char('vat_number',11)->unique()->nullable();
            $table->string('badge number',20);

            $table->foreignId('police_station_id')->constrained('police_stations');

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
        Schema::dropIfExists('police_officers');
    }
}
