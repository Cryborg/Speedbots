<?php

namespace Database\Factories;

use App\Models\Component;
use App\Models\Role;
use App\Models\User;
use App\Models\Weapon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'              => $this->faker->name,
            'email'             => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // "password"
            'remember_token'    => Str::random(10),
        ];
    }

    public function configure()
    {
        $playerRole = Role::where('slug', 'player')->first();
        $uzi = Weapon::where('name', 'Uzi')->first();
        $lasergun = Weapon::where('name', 'Lasergun')->first();

        return $this->afterCreating(function (User $user) use ($playerRole, $uzi, $lasergun) {
            $user->createToken('APIToken');

            if (!$user->hasRole('admin')) {
                $user->roles()
                     ->attach($playerRole);
            }

            // Mothership
            $user->ships()->create([
                'class'   => 'mothership',
                'health'   => 1000,
                'user_id' => $user->id,
            ]);

            // Speedbots and components
            $core        = Component::where('name', 'core')->firstOrFail();
            $engine      = Component::where('name', 'engine')->firstOrFail();
            $frame       = Component::where('name', 'frame')->firstOrFail();
            $hull        = Component::where('name', 'hull')->firstOrFail();
            $powerSupply = Component::where('name', 'power_supply')->firstOrFail();

            $components = [
                'core'         => [$core->id => ['health' => $core->health]],
                'engine'       => [$engine->id => ['health' => $engine->health]],
                'frame'        => [$frame->id => ['health' => $frame->health]],
                'hull'         => [$hull->id => ['health' => $hull->health]],
                'power_supply' => [$powerSupply->id => ['health' => $powerSupply->health]],
            ];

            $user->ships()
                 ->create([
                              'class'   => 'speedbots',
                              'health'  => 10,
                              'user_id' => $user->id,
                          ])
                 ->each(static function ($ship) use ($components, $uzi, $lasergun) {
                     foreach ($components as $component) {
                         $ship->components()
                              ->syncWithoutDetaching($component);
                     }
                     $ship->weapons()->sync([$uzi->id => ['ammo' => $lasergun->ammo]]);

                     // One chance out of 5 to have a laser, yeah !
                     if (mt_rand(1, 5) === 3) {
                         $ship->weapons()->sync([$lasergun->id => ['ammo' => $lasergun->ammo]]);
                     }
                 });
        });
    }
}
