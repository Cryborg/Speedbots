<?php

namespace App\Models\Relations;

use App\Models\Role;
use App\Models\Ship;

trait UserRelationships
{
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function ships()
    {
        return $this->hasMany(Ship::class);
    }
}
