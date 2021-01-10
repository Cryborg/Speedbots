<?php

namespace App\Models\Relations;

use App\Models\Component;
use App\Models\User;
use App\Models\Weapon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait ShipRelationships
{
    /**
     * @return BelongsToMany
     */
    public function components(): BelongsToMany
    {
        return $this->belongsToMany(Component::class)
                    ->withPivot('health');
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsToMany
     */
    public function weapons(): BelongsToMany
    {
        return $this->belongsToMany(Weapon::class)
            ->withPivot('accuracy', 'ammo', 'damage');
    }
}
