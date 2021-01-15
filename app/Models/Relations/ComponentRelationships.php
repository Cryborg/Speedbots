<?php

namespace App\Models\Relations;

use App\Models\Material;

trait ComponentRelationships
{
    /**
     * Get the translated name of the component
     *
     * @return string
     */
    public function getNameAttribute(): string
    {
        return trans('component.' . $this->slug);
    }

    public function materials()
    {
        return $this->belongsToMany(Material::class);
    }
}
