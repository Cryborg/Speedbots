<?php

namespace App\Models\Relations;

trait ComponentRelationships
{
    public function getNameAttribute()
    {
        return trans('component.' . $this->slug);
    }
}
