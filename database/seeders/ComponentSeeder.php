<?php

namespace Database\Seeders;

use App\Models\Component;
use App\Models\Material;
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
        $creditMaterial = Material::where('slug', 'credits')->first();

        // Frame
        $frame = Component::create([
            'slug' => 'frame',
            'health' => 20,
            'price' => 100,
            'weight' => 200,
            'energy_consumption' => 5,
            'power' => null,
            'slots' => 2,
        ]);

        // Materials needed to update the frame
        $frame->materials()->syncWithoutDetaching([
              $creditMaterial->id => [
                  'amount' => 3,
              ]
        ]);

        // Engine
        $engine = Component::create([
            'slug' => 'engine',
            'health' => 10,
            'price' => 1000,
            'weight' => null,
            'energy_consumption' => null,
            'power' => 1000,
            'slots' => null,
        ]);

        // Materials needed to update the engine
        $engine->materials()->syncWithoutDetaching([
            $creditMaterial->id => [
                'amount' => 3,
            ]
        ]);

        // Core unit
        $core = Component::create([
            'slug' => 'core',
            'health' => 5,
            'price' => 500,
            'weight' => 10,
            'energy_consumption' => 20,
            'power' => null,
            'slots' => null,
        ]);

        // Materials needed to update the core
        $core->materials()->syncWithoutDetaching([
            $creditMaterial->id => [
                'amount' => 3,
            ]
        ]);

        // Power supply
        $powerSupply = Component::create([
            'slug' => 'power_supply',
            'health' => 5,
            'price' => 500,
            'weight' => 100,
            'energy_consumption' => 20,
            'power' => null,
            'slots' => null,
        ]);

        // Materials needed to update the power supply
        $powerSupply->materials()->syncWithoutDetaching([
            $creditMaterial->id => [
                'amount' => 3,
            ]
        ]);


        // Hull
        $hull = Component::create([
            'slug' => 'hull',
            'health' => 1000,
            'price' => 150,
            'weight' => 300,
            'energy_consumption' => null,
            'power' => null,
            'slots' => null,
        ]);

        // Materials needed to update the hull
        $hull->materials()->syncWithoutDetaching([
            $creditMaterial->id => [
                'amount' => 3,
            ]
        ]);

    }
}
