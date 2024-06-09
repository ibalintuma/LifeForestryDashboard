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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("type")->default("individual")->nullable();
            $table->integer("members")->default(1)->nullable();
            $table->integer("members_male")->default(0)->nullable();
            $table->integer("members_female")->default(0)->nullable();
            $table->integer("age")->nullable();
            $table->integer("target_trees_to_plant")->nullable();
            $table->date("date_of_birth")->nullable();
            $table->string("phone")->nullable();
            $table->string("national_id_number")->nullable();
            $table->string("gender")->default("none")->nullable();
            $table->string("email")->nullable();
            $table->string("picture")->nullable();
            $table->string("password")->nullable();
            $table->string("country")->nullable();
            $table->string("address")->nullable();
            $table->string("gps_x")->nullable();
            $table->string("gps_y")->nullable();
            $table->string("access_code")->nullable();
            $table->string("bio")->nullable();
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
        Schema::dropIfExists('people');
    }
};
