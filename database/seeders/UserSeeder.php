<?php

namespace Database\Seeders;

use App\Models\Component;
use App\Models\Ship;
use App\Models\StellarObject;
use App\Models\User;
use App\Models\Weapon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(100)
                     ->create();

        $planet = StellarObject::where('type', 'planet')
                               ->inRandomOrder()->first();

        $users = User::all();

        foreach ($users as $user) {
            // Create a Mothership
            $user->ships()
                 ->create([
                      'name'   => 'Mothership',
                      'class'  => 'mothership',
                      'health' => 1000,
                      'in_orbit_at' => now(),
                      'in_orbit_of' => $planet->id,
                  ]);

            // Assign Speedbots with components
            $core        = Component::where('slug', 'core')->firstOrFail();
            $engine      = Component::where('slug', 'engine')->firstOrFail();
            $frame       = Component::where('slug', 'frame')->firstOrFail();
            $hull        = Component::where('slug', 'hull')->firstOrFail();
            $powerSupply = Component::where('slug', 'power_supply')->firstOrFail();

            $components = [
                'core'         => [$core->id => ['health' => $core->health]],
                'engine'       => [$engine->id => ['health' => $engine->health]],
                'frame'        => [$frame->id => ['health' => $frame->health]],
                'hull'         => [$hull->id => ['health' => $hull->health]],
                'power_supply' => [$powerSupply->id => ['health' => $powerSupply->health]],
            ];

            for ($j = 1; $j <= 10; $j++) {
                $ship = Ship::create([
                    'name'    => 'SB-' . $j,
                    'class'   => 'speedbot',
                    'health'  => 10,
                    'user_id' => $user->id,
                ]);

                foreach ($components as $component) {
                    foreach ($component as $cmpId => $cmp) {
                        $component[$cmpId]['equipped_on'] = $ship->id;
                    }

                    $user->components()->syncWithoutDetaching($component);
                }

                // Give as much weapons it can carry
                for ($i = 1; $i <= $frame->slots; $i++) {
                    $weapon = Weapon::inRandomOrder()->first();

                    $ship->weapons()->syncWithoutDetaching([
                        $weapon->id => [
                            'ammo'     => $weapon->ammo,
                            'damage'   => $weapon->damage,
                            'accuracy' => $weapon->accuracy,
                        ],
                    ]);
                }
            }
        }
    }
}
