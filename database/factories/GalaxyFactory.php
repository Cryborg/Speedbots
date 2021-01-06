<?php

namespace Database\Factories;

use App\Models\Galaxy;
use App\Models\StellarSystem;
use Illuminate\Database\Eloquent\Factories\Factory;

class GalaxyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Galaxy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'        => $this->faker->name,
            'description' => $this->faker->paragraph(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Galaxy $galaxy) {

            $stellarSystems = StellarSystem::factory(10)->create(['galaxy_id' => $galaxy->id]);
            $galaxy->stellarSystems()->saveMany($stellarSystems);
        });
    }
}
