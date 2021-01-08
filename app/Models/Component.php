<?php

namespace App\Models;

use App\Models\Relations\ComponentRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory, ComponentRelationships;
}
