<?php

namespace App\Models\Relations;

use App\Models\Ship;

trait UserRelationships
{
    public function ships()
    {
        return $this->hasMany(Ship::class);
    }
}
