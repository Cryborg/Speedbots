<?php

namespace App\Models\Relations;

trait WeaponRelationships
{
    public function getNameAttribute()
    {
        return trans('weapon.' . $this->slug);
    }
}
