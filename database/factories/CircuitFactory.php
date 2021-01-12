<?php

namespace Database\Factories;

use App\Models\Circuit;
use Illuminate\Database\Eloquent\Factories\Factory;

class CircuitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Circuit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'        => $this->faker->name,
            'length' => $this->faker->numberBetween(1000, 10000),
            'gravity' => $this->faker->numberBetween(0.5, 1.5),
            'gain_kill' => 10,
            'gain_victory' => 50,
        ];
    }
}
