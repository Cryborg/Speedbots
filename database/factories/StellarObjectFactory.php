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
        $coordinates = $this->getCoordinates();

        return [
            'name'           => $this->faker->unique()->words(rand(1, 3), true),
            'description'    => $this->faker->paragraph(1),
            'type'           => $this->faker->randomElement(['asteroid', 'shipwreck']),
            'disappear_at'   => $disappear_at,
            'coord_x'        => $coordinates['x'],
            'coord_y'        => $coordinates['y'],
            'coord_z'        => $coordinates['z'],
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

    public function getCoordinates() {
        $u = mt_rand();
        $x1 = mt_rand();
        $x2 = mt_rand();
        $x3 = mt_rand();

        $mag = sqrt($x1*$x1 + $x2*$x2 + $x3*$x3);
        $x1 /= $mag;
        $x2 /= $mag;
        $x3 /= $mag;

        // ** is cube root
        $c = $u ** (1/3);

        return [
            'x' => floor($x1 * $c),
            'y' => floor($x2 * $c),
            'z' => floor($x3 * $c),
        ];
    }

}
