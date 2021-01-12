<?php

namespace App\Models\Relations;

use App\Models\StellarSystem;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait StellarObjectRelationships
{
    /**
     * @return BelongsTo
     */
    public function stellarSystem(): BelongsTo
    {
        return $this->belongsTo(StellarSystem::class);
    }
}
