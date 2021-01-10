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
            'name'              => $this->faker->unique()->firstName,
            'email'             => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // "password"
            'remember_token'    => Str::random(10),
        ];
    }

    public function configure()
    {
        $playerRole = Role::where('slug', 'player')->first();

        return $this->afterCreating(function (User $user) use ($playerRole) {
            $user->createToken('APIToken');

            if (!$user->hasRole('admin')) {
                $user->roles()
                     ->attach($playerRole);
            }

            // Mothership
            $user->ships()->create([
                'name'  => 'Mothership',
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
                              'name'    => 'SB-' . $user->id,
                              'class'   => 'speedbot',
                              'health'  => 10,
                              'user_id' => $user->id,
                          ])
                 ->each(static function ($ship) use ($components, $frame) {
                     foreach ($components as $component) {
                         $ship->components()
                              ->syncWithoutDetaching($component);
                     }

                     // Give as much weapons as it can carry
                     for ($i = 1; $i <= $frame->slots; $i++) {
                         $weapon = Weapon::inRandomOrder()->first();
                         $ship->weapons()
                              ->sync([$weapon->id => [
                                  'ammo' => $weapon->ammo,
                                  'damage' => $weapon->damage,
                                  'accuracy' => $weapon->accuracy,
                              ]]);
                     }
                 });
        });
    }
}
