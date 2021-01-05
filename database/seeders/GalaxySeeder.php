<?php

namespace Database\Seeders;

use App\Models\Galaxy;
use Illuminate\Database\Seeder;

class GalaxySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Galaxy::create([
            'name'        => 'Test',
            'description' => 'Description test'
        ]);
    }
}
