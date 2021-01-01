<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Roles
        $adminRole = Role::create([
            'name' => 'Administrator',
            'slug' => 'admin',
        ]);

        $playerRole = Role::create([
            'name' => 'Player',
            'slug' => 'player',
        ]);

        // Fake users
        User::factory(10)->create()->each(function ($user) use ($adminRole, $playerRole) {
            // Create a token for authentication
            $user->createToken('APIToken');

            // Assign a role
            $user->roles()->attach($playerRole);
        });
    }
}
