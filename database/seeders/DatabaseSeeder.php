<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Ship;
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

        // Administration account. Everything that does not belong to
        // a user belongs to the Administration.
        $admin = User::factory()->create([
            'name' => 'Administration',
            'email' => 'administration@speedbots.fr',
        ]);
        $cryborg = User::factory()->create([
            'name' => 'Cryborg',
            'email' => 'cryborg@gmail.com'
        ]);
        $saromase = User::factory()->create([
            'name' => 'Saromase',
            'email' => 'seiteromain.dev@gmail.com',
        ]);

        // Create tokens for authentication
        $admin->createToken('APIToken');
        $cryborg->createToken('APIToken');
        $saromase->createToken('APIToken');

        // Assign roles

        $admin->roles()->attach($adminRole);
        $cryborg->roles()->attach($adminRole);
        $saromase->roles()->attach($adminRole);

        User::factory(10)->create();
    }
}
