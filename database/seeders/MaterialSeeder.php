<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materials = [
            // Unique
            [
                'slug' => 'credits',
                'rarity' => 0,
                'value' => null,
            ],

            // Rarity 1
            [
                'slug' => 'energy',
                'rarity' => 1,
                'value' => 1,
            ],
            [
                'slug' => 'metal',
                'rarity' => 1,
                'value' => 5,
            ],
            [
                'slug' => 'carcite',
                'rarity' => 1,
                'value' => 10,
            ],
            [
                'slug' => 'lithonium',
                'rarity' => 1,
                'value' => 20,
            ],

            // Rarity 2
            [
                'slug' => 'durdurium',
                'rarity' => 2,
                'value' => 10,
            ],
            [
                'slug' => 'helium3',
                'rarity' => 2,
                'value' => 20,
            ],

            // Rarity 3
            // Rarity 4
            // Rarity 5
        ];

        Material::insert($materials);
    }
}
