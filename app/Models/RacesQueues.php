<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RacesQueues extends Model
{
    use HasFactory;

    protected $fillable = [
        'race_id',
        'ship_id',
        'confirmed',
    ];
}
