<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Laravel\Sanctum\PersonalAccessToken;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('slug', 'admin')->first();

        // Administration accounts.
        // Everything that does not belong to a user belongs to the Administration.
        $admin = User::factory()->create([
            'username' => 'Administration',
            'email' => 'administration@speedbots.fr',
        ]);

        $cryborg = User::factory()->create([
            'username' => 'Cryborg',
            'email' => 'cryborg@gmail.com'
        ]);
        $saromase = User::factory()->create([
            'username' => 'Saromase',
            'email' => 'seiteromain.dev@gmail.com',
        ]);

        // Create tokens for authentication
        $admin->createToken('APIToken');
        $cryborg->createToken('APIToken');
        $saromase->createToken('APIToken');

        // Assign roles
        $admin->roles()->attach($adminRole);
        $cryborg->roles()->attach($adminRole);
        $saromase->roles()->attach($adminRole);

        // Not on PROD !
        if (env('APP_DEBUG', false) === true) {
            // Update token so that it is always the same for API tests via Postman
            $admins = [$cryborg, $saromase];

            foreach ($admins as $admin) {
                PersonalAccessToken::where('tokenable_id', $admin->id)
                                   ->first()
                                   ->update([
                                                'token' => 'this_is_' . $admin->username . 's_token',
                                            ]);
            }
        }
    }
}
