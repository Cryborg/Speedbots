<?php

namespace App\Models\Relations;

use App\Models\StellarSystem;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait GalaxyRelationships
{
    /**
     * @return HasMany
     */
    public function stellarSystems(): HasMany
    {
        return $this->hasMany(StellarSystem::class);
    }
}
