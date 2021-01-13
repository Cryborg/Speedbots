<?php

namespace App\Models\Relations;

use App\Models\Ship;
use App\Models\User;

trait RaceRelationships
{
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function ships()
    {
        return $this->belongsToMany(Ship::class)
            ->withPivot('ended_at');
    }
}
