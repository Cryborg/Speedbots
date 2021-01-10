<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Relations\StellarObjectRelationships;
use Illuminate\Database\Eloquent\Model;

class StellarObject extends Model
{
    use HasFactory,
        StellarObjectRelationships;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'type',
        'disappear_at'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'disappear_at' => 'datetime',
    ];
}