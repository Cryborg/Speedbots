<?php

namespace App\Models\Relations;

use App\Models\Component;

trait MaterialRelationships
{
    /**
     * Get the translated name of the material
     *
     * @return string
     */
    public function getNameAttribute(): string
    {
        return trans('material.' . $this->slug);
    }

    public function components()
    {
        return $this->belongsToMany(Component::class);
    }
}
