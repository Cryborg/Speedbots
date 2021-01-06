<?php

namespace App\Models\Relations;

use App\Models\Galaxy;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait StellarSystemRelationships
{
    /**
     * @return BelongsTo
     */
    public function galaxy(): BelongsTo
    {
        return $this->belongsTo(Galaxy::class);
    }
}
