<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaceLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'race_id',
        'comments',
        'shooter_state',
        'target_state',
    ];

    protected $dateFormat = 'Y-m-d H:i:s.u';

    protected $casts = [
        'shooter_state' => 'array',
        'target_state' => 'array',
    ];
}
