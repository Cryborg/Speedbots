<?php

namespace App\Models;

use App\Models\Relations\MaterialRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory,
        MaterialRelationships;

    protected $guarded = ['id'];
}
