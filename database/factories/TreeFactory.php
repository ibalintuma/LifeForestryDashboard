<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tree>
 */
class TreeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
          'person_id' => \App\Models\Person::factory(),
          'tree_specie_id' => $this->faker->numberBetween(1, 5), // Assuming you have a TreeSpecie model
          'date_of_planting' => $this->faker->date,
          'next_follow_up_date' => $this->faker->date,
          'picture' => $this->faker->imageUrl,
          'source' => $this->faker->word,
          'obtained_from' => $this->faker->company,
          'location' => $this->faker->address,
          'soil_prep' => $this->faker->word,
          'method' => $this->faker->word,
          'weather' => $this->faker->word,
          'watering' => $this->faker->word,
          'mulch' => $this->faker->word,
          'initial_health' => $this->faker->word,
          'care_schedule' => $this->faker->word,
          'growth' => $this->faker->word,
          'survival' => $this->faker->word,
          'pests_diseases' => $this->faker->word,
          'gps_x' => $this->faker->latitude,
          'gps_y' => $this->faker->longitude,
          'notes' => $this->faker->paragraph,
          'status' => $this->faker->randomElement(['active', 'inactive']),
          'number_of_trees_planted' => $this->faker->numberBetween(1, 10),
          'source_other' => $this->faker->word,
          'height' => $this->faker->numberBetween(1, 1000),
        ];
    }
}
