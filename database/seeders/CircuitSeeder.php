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
            'length' => 2000,
            'width' => 1,
            'gravity' => 1,
            'gain_kill' => 10,
            'gain_victory' => 50,
        ]);
    }
}
