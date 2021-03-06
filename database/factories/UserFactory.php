<?php

namespace Database\Factories;

use App\Models\Material;
use App\Models\Role;
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
            'username'          => $this->faker->unique()->firstName,
            'email'             => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // "password"
            'remember_token'    => Str::random(10),
        ];
    }

    public function configure()
    {
        $playerRole = Role::where('slug', 'player')
                          ->first();

        $creditMaterial = Material::where('slug', 'credits')
                                  ->firstOrFail();

        return $this->afterCreating(function (User $user) use ($playerRole, $creditMaterial) {
            $user->createToken('APIToken');

            if (!$user->hasRole('admin')) {
                $user->roles()->attach($playerRole);
            }

            // Give a few credits to the user
            $user->inventory()->syncWithoutDetaching([
                $creditMaterial->id => [
                    'amount' => 100
                ]
            ]);
        });
    }
}
