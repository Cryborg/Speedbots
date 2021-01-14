<?php

namespace App\Models\Relations;

trait MaterialRelationships
{
    public function getNameAttribute()
    {
        return trans('material.' . $this->stub);
    }
}
