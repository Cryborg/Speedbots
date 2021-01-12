<?php

namespace App\Models\Relations;

use App\Models\User;

trait RaceRelationships
{
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
