<?php

namespace App\Models\Relations;

use App\Models\Role;
use App\Models\Ship;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait UserRelationships
{
    /**
     * @return BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * @return HasMany
     */
    public function ships(): HasMany
    {
        return $this->hasMany(Ship::class);
    }
}
