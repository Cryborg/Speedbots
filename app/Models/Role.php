<?php

namespace App\Models;

use App\Models\Relations\RoleRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory,
        RoleRelationships;
}
