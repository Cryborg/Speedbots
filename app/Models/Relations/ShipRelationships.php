<?php

namespace App\Models\Relations;

use App\Models\User;

trait ShipRelationships
{
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
