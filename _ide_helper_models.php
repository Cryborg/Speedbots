<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Circuit
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Circuit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Circuit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Circuit query()
 */
	class Circuit extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Component
 *
 * @property-read string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Material[] $materials
 * @property-read int|null $materials_count
 * @method static \Illuminate\Database\Eloquent\Builder|Component newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Component newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Component query()
 */
	class Component extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ComponentUser
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ComponentUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ComponentUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ComponentUser query()
 */
	class ComponentUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Galaxy
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\StellarSystem[] $stellarSystems
 * @property-read int|null $stellar_systems_count
 * @method static \Illuminate\Database\Eloquent\Builder|Galaxy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Galaxy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Galaxy query()
 */
	class Galaxy extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Material
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Component[] $components
 * @property-read int|null $components_count
 * @property-read string $name
 * @method static \Illuminate\Database\Eloquent\Builder|Material newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Material newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Material query()
 */
	class Material extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MaterialUser
 *
 * @method static \Illuminate\Database\Eloquent\Builder|MaterialUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MaterialUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MaterialUser query()
 */
	class MaterialUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Race
 *
 * @property-read \App\Models\User $creator
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Ship[] $ships
 * @property-read int|null $ships_count
 * @method static \Illuminate\Database\Eloquent\Builder|Race newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Race newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Race query()
 */
	class Race extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RaceLog
 *
 * @method static \Illuminate\Database\Eloquent\Builder|RaceLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RaceLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RaceLog query()
 */
	class RaceLog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Ship
 *
 * @property-read \App\Models\User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Weapon[] $weapons
 * @property-read int|null $weapons_count
 * @method static \Illuminate\Database\Eloquent\Builder|Ship mothership()
 * @method static \Illuminate\Database\Eloquent\Builder|Ship newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ship newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ship query()
 */
	class Ship extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StellarObject
 *
 * @property-read \App\Models\StellarSystem $stellarSystem
 * @method static \Illuminate\Database\Eloquent\Builder|StellarObject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StellarObject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StellarObject query()
 */
	class StellarObject extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StellarSystem
 *
 * @property-read \App\Models\Galaxy $galaxy
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\StellarObject[] $stellarObjects
 * @property-read int|null $stellar_objects_count
 * @method static \Illuminate\Database\Eloquent\Builder|StellarSystem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StellarSystem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StellarSystem query()
 */
	class StellarSystem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Component[] $components
 * @property-read int|null $components_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Material[] $inventory
 * @property-read int|null $inventory_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Ship[] $ships
 * @property-read int|null $ships_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Weapon
 *
 * @property-read float|int|mixed $max_damage
 * @property-read float|int|mixed $min_damage
 * @property-read mixed $name
 * @property-read array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Translation\Translator|string|null $quality_text
 * @property-read array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Translation\Translator|string|null $rarity_text
 * @property-read mixed $updated_damage
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon query()
 */
	class Weapon extends \Eloquent {}
}

