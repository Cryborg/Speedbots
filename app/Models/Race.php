<?php

namespace App\Models;

use App\Models\Relations\RaceRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory,
        RaceRelationships;

    protected $guarded = ['id'];
}
