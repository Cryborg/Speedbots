<?php

namespace App\Models\Relations;

use App\Models\User;

trait RoleRelationships
{
    public function users() {

        return $this->belongsToMany(User::class);

    }
}
