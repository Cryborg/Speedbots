<?php

namespace Database\Factories;

use App\Models\StellarObject;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class StellarObjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StellarObject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date = new Carbon();
        $disappear_at = $date->day();
        return [
            'name'           => $this->faker->unique()->words(rand(1, 3), true),
            'description'    => $this->faker->paragraph(1),
            'type'           => $this->faker->randomElement(['asteroid', 'shipwreck']),
            'disappear_at'   => $disappear_at
        ];
    }

    /**
     * Indicate if stellar object is a planet.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function planet()
    {
        return $this->state(function (array $attributes) {
            return [
                'disappear_at' => null,
                'type'         => 'planet'
            ];
        });
    }

    /**
     * Indicate if stellar object is a portal.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function portal()
    {
        return $this->state(function (array $attributes) {
            return [
                'disappear_at' => null,
                'type'         => 'portal'
            ];
        });
    }

    /**
     * Indicate if stellar object is a star.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function star()
    {
        return $this->state(function (array $attributes) {
            return [
                'disappear_at' => null,
                'type'         => 'star'
            ];
        });
    }

    /**
     * Indicate if stellar object is a satellite.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function satellite()
    {
        return $this->state(function (array $attributes) {
            return [
                'disappear_at' => null,
                'type'         => 'satellite'
            ];
        });
    }

    /**
     * Indicate if stellar object is a circuit.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function circuit()
    {
        return $this->state(function (array $attributes) {
            return [
                'disappear_at' => null,
                'type'         => 'circuit'
            ];
        });
    }
}
