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
 * @property int $id
 * @property string $name
 * @property int $length
 * @property int $gravity
 * @property string $gain_kill
 * @property string $gain_victory
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Circuit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Circuit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Circuit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Circuit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Circuit whereGainKill($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Circuit whereGainVictory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Circuit whereGravity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Circuit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Circuit whereLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Circuit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Circuit whereUpdatedAt($value)
 */
	class Circuit extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Component
 *
 * @property int $id
 * @property string $name
 * @property int $health Health points
 * @property int $price
 * @property int|null $weight
 * @property int|null $energy_consumption How much energy does it consume?
 * @property int|null $power How much energy can it store?
 * @property int|null $slots Available slots on the frame.
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Component newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Component newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Component query()
 * @method static \Illuminate\Database\Eloquent\Builder|Component whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Component whereEnergyConsumption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Component whereHealth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Component whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Component whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Component wherePower($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Component wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Component whereSlots($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Component whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Component whereWeight($value)
 */
	class Component extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ComponentShip
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ComponentShip newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ComponentShip newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ComponentShip query()
 */
	class ComponentShip extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Galaxy
 *
 * @property int $id
 * @property string $name Name of the Galaxy
 * @property string $description Description of the Galaxy
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\StellarSystem[] $stellarSystems
 * @property-read int|null $stellar_systems_count
 * @method static \Illuminate\Database\Eloquent\Builder|Galaxy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Galaxy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Galaxy query()
 * @method static \Illuminate\Database\Eloquent\Builder|Galaxy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Galaxy whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Galaxy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Galaxy whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Galaxy whereUpdatedAt($value)
 */
	class Galaxy extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Race
 *
 * @property int $id
 * @property int $circuit_id
 * @property int $nb_opponents
 * @property string|null $start_at Date & time of the beginning of the race. If it is null, it starts when the queue is full.
 * @property string|null $ended_at Date & time of the end of the race.
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $creator
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Ship[] $ships
 * @property-read int|null $ships_count
 * @method static \Illuminate\Database\Eloquent\Builder|Race newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Race newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Race query()
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereCircuitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereEndedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereNbOpponents($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereUpdatedAt($value)
 */
	class Race extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RaceLog
 *
 * @property int $id
 * @property string $race_id
 * @property string $comments
 * @property array|null $shooter_state
 * @property array|null $target_state
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RaceLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RaceLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RaceLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|RaceLog whereComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RaceLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RaceLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RaceLog whereRaceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RaceLog whereShooterState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RaceLog whereTargetState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RaceLog whereUpdatedAt($value)
 */
	class RaceLog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Ship
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $class
 * @property float $health
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Component[] $components
 * @property-read int|null $components_count
 * @property-read \App\Models\User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Weapon[] $weapons
 * @property-read int|null $weapons_count
 * @method static \Illuminate\Database\Eloquent\Builder|Ship newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ship newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ship query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ship whereClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ship whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ship whereHealth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ship whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ship whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ship whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ship whereUserId($value)
 */
	class Ship extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StellarObject
 *
 * @property int $id
 * @property int $stellar_system_id
 * @property string $name Name of stellar object
 * @property string $description Description of stellar object
 * @property string $type Type of stellar object. [planet|star|shipwreck|circuit|asteroid|satellite|portal]
 * @property \Illuminate\Support\Carbon|null $disappear_at If the stellar object is ephemeral
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\StellarSystem $stellarSystem
 * @method static \Illuminate\Database\Eloquent\Builder|StellarObject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StellarObject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StellarObject query()
 * @method static \Illuminate\Database\Eloquent\Builder|StellarObject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StellarObject whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StellarObject whereDisappearAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StellarObject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StellarObject whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StellarObject whereStellarSystemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StellarObject whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StellarObject whereUpdatedAt($value)
 */
	class StellarObject extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StellarSystem
 *
 * @property int $id
 * @property int $galaxy_id
 * @property string $name Name of the stellar system
 * @property string $description Description of the stellar system
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Galaxy $galaxy
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\StellarObject[] $stellarObjects
 * @property-read int|null $stellar_objects_count
 * @method static \Illuminate\Database\Eloquent\Builder|StellarSystem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StellarSystem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StellarSystem query()
 * @method static \Illuminate\Database\Eloquent\Builder|StellarSystem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StellarSystem whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StellarSystem whereGalaxyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StellarSystem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StellarSystem whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StellarSystem whereUpdatedAt($value)
 */
	class StellarSystem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
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
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Weapon
 *
 * @property int $id
 * @property string $name
 * @property string $type Ballistic, EMP, laser, plasma,...
 * @property float $damage
 * @property int $ammo Total ammunition
 * @property int $salvo How much ammunition is fired in each burst.
 * @property int $range
 * @property int $accuracy
 * @property int $direction In which direction will it shoot?
 * @property int $quality
 * @property int $rarity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read float|int|mixed $max_damage
 * @property-read float|int|mixed $min_damage
 * @property-read array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Translation\Translator|string|null $quality_text
 * @property-read array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Translation\Translator|string|null $rarity_text
 * @property-read mixed $updated_damage
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereAccuracy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereAmmo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereDamage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereDirection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereQuality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereSalvo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereUpdatedAt($value)
 */
	class Weapon extends \Eloquent {}
}

