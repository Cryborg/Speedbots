<?php

namespace Database\Factories;

use App\Models\Race;
use Illuminate\Database\Eloquent\Factories\Factory;

class RaceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Race::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nb_opponents' => $this->faker->numberBetween(10, 20),
            'start_at'     => $this->faker->dateTimeThisMonth,
            'created_by'   => 1,
        ];
    }
}
