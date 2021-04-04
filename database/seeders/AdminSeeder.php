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
        // Administration accounts.
        // Everything that does not belong to a user belongs to the Administration.
        $admin = User::factory()->create([
            'name' => 'Administration',
            'email' => 'administration@speedbots.fr',
        ]);

        $cryborg = User::factory()->create([
            'name' => 'Cryborg',
            'email' => 'cryborg@gmail.com'
        ]);
        $saromase = User::factory()->create([
            'name' => 'Saromase',
            'email' => 'seiteromain.dev@gmail.com',
        ]);

        // Create tokens for authentication
        $admin->createToken('APIToken');
        $cryborg->createToken('APIToken');
        $saromase->createToken('APIToken');

        // Assign roles
        $admin->assignRole(Role::ROLE_ADMIN);
        $cryborg->assignRole(Role::ROLE_ADMIN);
        $saromase->assignRole(Role::ROLE_ADMIN);

        // Not on PROD !
        if (env('APP_DEBUG', false) === true) {
            // Update token so that it is always the same for API tests via Postman
            $admins = [$cryborg, $saromase];

            foreach ($admins as $admin) {
                PersonalAccessToken::where('tokenable_id', $admin->id)
                                   ->first()
                                   ->update([
                                                'token' => 'this_is_' . $admin->name . 's_token',
                                            ]);
            }
        }
    }
}
