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
 * @property int $width
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
 * @method static \Illuminate\Database\Eloquent\Builder|Circuit whereWidth($value)
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
 * @property string $class
 * @property int $health
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
 * @method static \Illuminate\Database\Eloquent\Builder|Ship whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ship whereUserId($value)
 */
	class Ship extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Upgrade
 *
 * @property int $id
 * @property string $upgradable_type
 * @property int $upgradable_id
 * @property int $level
 * @property int $amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Upgrade newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Upgrade newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Upgrade query()
 * @method static \Illuminate\Database\Eloquent\Builder|Upgrade whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Upgrade whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Upgrade whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Upgrade whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Upgrade whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Upgrade whereUpgradableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Upgrade whereUpgradableType($value)
 */
	class Upgrade extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
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
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Weapon
 *
 * @property int $id
 * @property string $type Ballistic, EMP, laser, plasma,...
 * @property int $damage
 * @property int $ammo Total ammunition
 * @property int $salvo How much ammunition is fired in each burst.
 * @property int $range
 * @property int $accuracy
 * @property int $direction In which direction will it shoot?
 * @property int $level
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereAccuracy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereAmmo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereDamage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereDirection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereSalvo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Weapon whereUpdatedAt($value)
 */
	class Weapon extends \Eloquent {}
}

