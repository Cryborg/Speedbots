<?php

namespace App\Models\Relations;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Galaxy;
use App\Models\StellarObject;

trait StellarSystemRelationships
{
    /**
     * @return BelongsTo
     */
    public function galaxy(): BelongsTo
    {
        return $this->belongsTo(Galaxy::class);
    }

    /**
     * @return HasMany
     */
    public function stellarObjects(): HasMany
    {
        return $this->hasMany(StellarObject::class);
    }
}
