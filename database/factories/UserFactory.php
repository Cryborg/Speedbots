<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\Ship;
use App\Models\User;
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
            'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            // password
            'remember_token'    => Str::random(10),
        ];
    }

    public function configure()
    {
        $playerRole = Role::where('slug', 'player')->first();

        return $this->afterCreating(function (User $user) use ($playerRole) {
            $user->createToken('APIToken');
            $user->roles()
                 ->attach($playerRole);

            // Base ship
            Ship::factory()
                ->create([
                    'class'   => 'base',
                    'health'   => 1000,
                    'user_id' => $user->id,
                ]);

            // Speedbots
            Ship::factory(5)
                ->create([
                    'class'   => 'speedbots',
                    'health'   => 10,
                    'user_id' => $user->id,
                ]);
        });
    }
}
