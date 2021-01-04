<?php

namespace App\Models;

use App\Models\Relations\ShipRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    use HasFactory, ShipRelationships;

    protected $guarded = ['id'];

    protected $with = ['user'];

    public function getHull()
    {
        return $this->components->where('name', 'hull')->first();
    }
}
