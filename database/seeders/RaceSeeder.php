<?php

namespace Database\Seeders;

use App\Models\Circuit;
use App\Models\Race;
use Illuminate\Database\Seeder;

class RaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Race::factory(100)->create([
            'circuit_id' => Circuit::inRandomOrder()->first()->id
        ]);
    }
}
