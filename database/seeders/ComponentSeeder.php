<?php

namespace Database\Seeders;

use App\Models\Component;
use Illuminate\Database\Seeder;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Frame
        Component::create([
            'name' => 'frame',
            'health' => 20,
            'price' => 100,
            'weight' => 200,
            'energy_consumption' => 5,
            'power' => null,
            'slots' => 2,
        ]);

        // Engine
        Component::create([
            'name' => 'engine',
            'health' => 10,
            'price' => 1000,
            'weight' => null,
            'energy_consumption' => null,
            'power' => 1000,
            'slots' => null,
        ]);

        // Core unit
        Component::create([
            'name' => 'core',
            'health' => 5,
            'price' => 500,
            'weight' => 10,
            'energy_consumption' => 20,
            'power' => null,
            'slots' => null,
        ]);

        // Power supply
        Component::create([
            'name' => 'power_supply',
            'health' => 5,
            'price' => 500,
            'weight' => 100,
            'energy_consumption' => 20,
            'power' => null,
            'slots' => null,
        ]);

        // Hull
        Component::create([
            'name' => 'hull',
            'health' => 100,
            'price' => 150,
            'weight' => 300,
            'energy_consumption' => null,
            'power' => null,
            'slots' => null,
        ]);

    }
}
