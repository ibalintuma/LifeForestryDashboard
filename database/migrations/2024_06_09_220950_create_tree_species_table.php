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
      /*

      INSERT INTO tree_species (name, picture, notes, care_duration_in_days, mature_duration_in_days, created_at, updated_at) VALUES
('Oak', 'oak.jpg', 'Oak trees are known for their strength and longevity.', '365', '3650', NOW(), NOW()),
('Maple', 'maple.jpg', 'Maple trees are known for their beautiful fall foliage.', '200', '2500', NOW(), NOW()),
('Pine', 'pine.jpg', 'Pine trees are evergreen and produce cones.', '180', '1500', NOW(), NOW());


       */

        Schema::create('tree_species', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("picture")->nullable();
            $table->string("status")->default("active")->nullable();
            $table->text("notes")->nullable();
            $table->string("care_duration_in_days")->nullable();
            $table->string("mature_duration_in_days")->nullable();
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
        Schema::dropIfExists('tree_species');
    }
};
