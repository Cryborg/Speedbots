<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Relations\StellarSystemRelationships;
use Illuminate\Database\Eloquent\Model;

class StellarSystem extends Model
{
    use HasFactory,
        StellarSystemRelationships;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'galaxy_id',
    ];
}