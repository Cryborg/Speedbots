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
            [
                'stub' => 'credits',
                'rarity' => 0,
                'value' => null,
            ],
            [
                'stub' => 'durdurium',
                'rarity' => 2,
                'value' => 10,
            ],
            [
                'stub' => 'lithonium',
                'rarity' => 5,
                'value' => 100,
            ],
            [
                'stub' => 'helium3',
                'rarity' => 2,
                'value' => 20,
            ],
        ];

        Material::insert($materials);
    }
}
