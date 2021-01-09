<?php

namespace Database\Seeders;

use App\Models\Weapon;
use Illuminate\Database\Seeder;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Weapon::create([
            'name' => 'Uzi',
            'type' => 'ballistic',
            'damage' => 1,
            'ammo' => 500,
            'salvo' => 20,
            'range' => 2,
            'accuracy' => 50,
            'direction' => 1,
            'level' => 1,
        ]);

        Weapon::create([
            'name' => 'Lasergun',
            'type' => 'laser',
            'damage' => 10,
            'ammo' => 50,
            'salvo' => 1,
            'range' => 5,
            'accuracy' => 90,
            'direction' => 1,
            'level' => 1,
        ]);
    }
}
