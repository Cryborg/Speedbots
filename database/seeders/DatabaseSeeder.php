<?php

namespace Database\Seeders;

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
        // Production seeds
        $this->call(RoleSeeder::class);
        $this->call(ComponentSeeder::class);
        $this->call(CircuitSeeder::class);
        $this->call(GalaxySeeder::class);
        $this->call(WeaponSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(RaceSeeder::class);
        $this->call(MaterialSeeder::class);

        // Dev seeds
        if (!app()->environment('production')) {
            $this->call(UserSeeder::class);
        }
    }
}
