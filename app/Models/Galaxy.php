<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Relations\GalaxyRelationships;
use Illuminate\Database\Eloquent\Model;

class Galaxy extends Model
{
    use HasFactory,
        GalaxyRelationships;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
    ];
}