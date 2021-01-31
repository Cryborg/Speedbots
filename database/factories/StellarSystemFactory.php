<?php

namespace Database\Factories;

use App\Models\StellarSystem;
use App\Models\StellarObject;
use Illuminate\Database\Eloquent\Factories\Factory;

class StellarSystemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StellarSystem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'        => $this->faker->name,
            'description' => $this->faker->paragraph(1),
            'coord_x'     => $this->faker->unique()->numberBetween(1, 99),
            'coord_y'     => $this->faker->unique()->numberBetween(1, 99),
            'color'       => $this->faker->randomElement(['#00439e', '#c13030', '#fffd0a', '#fff', '#FFA500'])
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (StellarSystem $stellarSystem) {

            $temporaryStellarObjects = StellarObject::factory(rand(5, 30))->create(['stellar_system_id' => $stellarSystem->id]);
            $planets = StellarObject::factory(rand(3, 9))->planet()->create(['stellar_system_id' => $stellarSystem->id]);
            $portal = StellarObject::factory(rand(0, 1))->portal()->create(['stellar_system_id' => $stellarSystem->id]);
            $star = StellarObject::factory(1)->star()->create(['stellar_system_id' => $stellarSystem->id]);
            $satellites = StellarObject::factory(1)->satellite()->create(['stellar_system_id' => $stellarSystem->id]);
            $circuits = StellarObject::factory(1)->circuit()->create(['stellar_system_id' => $stellarSystem->id]);

            $stellarSystem->stellarObjects()->saveMany([
                ...$temporaryStellarObjects,
                ...$planets,
                ...$portal,
                ...$star,
                ...$satellites,
                ...$circuits
            ]);
        });
    }
}
