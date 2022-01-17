<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offense', function (Blueprint $table) {
            $table->id();
            $table->date('date of offense');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('traffic_violation_id')->constrained('traffic_violations');
            $table->foreignId('place_id')->constrained('places');
            $table->foreignId('police_officer_id')->constrained('police_officers');



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
        Schema::dropIfExists('offense');
    }
}
