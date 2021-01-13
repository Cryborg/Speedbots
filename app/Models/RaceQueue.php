<?php

namespace App\Models;

use App\Models\Relations\RaceQueueRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaceQueue extends Model
{
    use HasFactory, RaceQueueRelationships;

    protected $fillable = [
        'race_id',
        'ship_id',
        'confirmed',
    ];

    protected $table = 'races_queues';
}
