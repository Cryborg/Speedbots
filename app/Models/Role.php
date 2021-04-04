<?php

namespace App\Models;

use App\Models\Relations\RoleRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends \Spatie\Permission\Models\Role
{
    use HasFactory;

    public const ROLE_ADMIN = 'Administrator';
    public const ROLE_PLAYER = 'Player';
}
