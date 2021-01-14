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
        /**
         * Create all quality & rarity weapons
         */
        for ($quality = 1; $quality <= 5; $quality++) {
            for ($rarity = 1; $rarity <= 5; $rarity++) {
                Weapon::create([
                                   'stub'      => 'uzi',
                                   'type'      => 'ballistic',
                                   'damage'    => 1,
                                   'ammo'      => 500,
                                   'salvo'     => 20,
                                   'range'     => 2,
                                   'accuracy'  => 50,
                                   'direction' => 1,
                                   'quality'   => $quality,
                                   'rarity'    => $rarity,
                               ]);

                Weapon::create([
                                   'stub'      => 'lasergun',
                                   'type'      => 'laser',
                                   'damage'    => 10,
                                   'ammo'      => 50,
                                   'salvo'     => 1,
                                   'range'     => 5,
                                   'accuracy'  => 90,
                                   'direction' => 1,
                                   'quality'   => $quality,
                                   'rarity'    => $rarity,
                               ]);
            }
        }
    }
}
