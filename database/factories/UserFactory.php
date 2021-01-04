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
        $weapon = Weapon::first();

        return $this->afterCreating(function (User $user) use ($playerRole, $weapon) {
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
            $components = [
                'core' => Component::where('name', 'core')->first()->id,
                'engine' => Component::where('name', 'engine')->first()->id,
                'frame' => Component::where('name', 'frame')->first()->id,
                'hull' => Component::where('name', 'hull')->first()->id,
                'power_supply' => Component::where('name', 'power_supply')->first()->id,
            ];

            $user->ships()->create([
                'class'   => 'speedbots',
                'health'   => 10,
                'user_id' => $user->id,
            ])->each(static function ($ship) use ($components, $weapon) {
                $ship->components()->syncWithoutDetaching(array_values($components));
                $ship->weapons()->sync($weapon->id);
            });
        });
    }
}
