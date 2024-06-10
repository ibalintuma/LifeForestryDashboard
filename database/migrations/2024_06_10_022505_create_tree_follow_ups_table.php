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
        Schema::create('tree_follow_ups', function (Blueprint $table) {
            $table->id();

            $table->date('date_of_follow_up')->nullable();
            $table->unsignedBigInteger('tree_id')->nullable();
            $table->unsignedBigInteger('person_id')->nullable();

            $table->string('picture')->nullable();
            $table->string('gps_x')->nullable();
            $table->string('gps_y')->nullable();

            $table->double('height')->nullable();
            $table->double('canopy')->nullable();
            $table->string('trunk_diameter')->nullable();

            $table->string('leaf_condition')->nullable();
            $table->string('new_growth')->nullable();
            $table->string('watering')->nullable();
            $table->string('fertilization')->nullable();
            $table->string('mulch')->nullable();
            $table->string('weed_pest_control')->nullable();
            $table->string('pruning')->nullable();
            $table->string('general_health')->nullable();
            $table->string('environmental_conditions')->nullable();
            $table->string('notes')->nullable();
            $table->string('status')->nullable();

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
        Schema::dropIfExists('tree_follow_ups');
    }
};
