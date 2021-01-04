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
        $this->call(AdminSeeder::class);
        $this->call(ComponentSeeder::class);

        // Dev seeds
        if (!app()->environment('production')) {
            $this->call(UserSeeder::class);
        }
    }
}
