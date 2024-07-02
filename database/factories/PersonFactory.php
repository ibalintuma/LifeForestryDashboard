<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
          'name' => $this->faker->name,

          'type' => 'individual',
          'members' => 1,
          'members_male' => 0,
          'members_female' => 0,

          /*'type' => 'organization',
          'members' => $this->faker->numberBetween(1, 100),
          'members_male' => $this->faker->numberBetween(0, 50),
          'members_female' => $this->faker->numberBetween(0, 50),*/

          'age' => $this->faker->numberBetween(18, 100),
          'target_trees_to_plant' => $this->faker->numberBetween(1, 1000),
          'date_of_birth' => $this->faker->date,
          'phone' => $this->faker->phoneNumber,
          'national_id_number' => $this->faker->unique()->numerify('##########'),
          'gender' => $this->faker->randomElement(['male', 'female', 'none']),
          'email' => $this->faker->unique()->safeEmail,
          'picture' => $this->faker->imageUrl,
          'password' => bcrypt('password'),
          'country' => $this->faker->country,
          'address' => $this->faker->address,
          'gps_x' => $this->faker->latitude,
          'gps_y' => $this->faker->longitude,
          'access_code' => $this->faker->uuid,
          'bio' => $this->faker->sentence,
          'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
