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
        Schema::create('trees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("person_id")->nullable();
            $table->unsignedBigInteger("tree_specie_id")->nullable();

            $table->date("date_of_planting")->nullable();

            $table->string("picture")->nullable();
            $table->string("source")->nullable();
            $table->string("obtained_from")->nullable();
            $table->string("location")->nullable();
            $table->string("soil_prep")->nullable();
            $table->string("method")->nullable();
            $table->string("weather")->nullable();
            $table->string("watering")->nullable();
            $table->string("mulch")->nullable();
            $table->string("initial_health")->nullable();
            $table->string("care_schedule")->nullable();
            $table->string("growth")->nullable();
            $table->string("survival")->nullable();
            $table->string("pests_diseases")->nullable();
            $table->text("notes")->nullable();
            $table->string("status")->default("active")->nullable();

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
        Schema::dropIfExists('trees');
    }
};
