<?php

namespace App\Models\Relations;

use App\Models\Race;
use App\Models\Ship;

trait RaceQueueRelationships
{
    public function race()
    {
        return $this->belongsTo(Race::class);
    }

    public function ship()
    {
        return $this->belongsTo(Ship::class);
    }
}
