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
    }
}
