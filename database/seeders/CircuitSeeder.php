<?php

namespace Database\Seeders;

use App\Models\Circuit;
use Illuminate\Database\Seeder;

class CircuitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Circuit::create([
            'name' => 'Test',
            'length' => 1000,
            'width' => 5,
            'gravity' => 1,
            'gain_kill' => 10,
            'gain_victory' => 50,
        ]);
    }
}
