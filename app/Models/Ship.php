<?php

namespace App\Models;

use App\Models\Relations\ShipRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    use HasFactory, ShipRelationships;

    protected $guarded = ['id'];

    /**
     * @return mixed
     */
    public function core()
    {
        return $this->components->where('name', 'core')->first();
    }

    /**
     * @return mixed
     */
    public function engine()
    {
        return $this->components->where('name', 'engine')->first();
    }

    /**
     * @return mixed
     */
    public function frame()
    {
        return $this->components->where('name', 'frame')->first();
    }

    /**
     * @return mixed
     */
    public function hull()
    {
        return $this->components->where('name', 'hull')->first();
    }

    /**
     * @return mixed
     */
    public function power_supply()
    {
        return $this->components->where('name', 'power_supply')->first();
    }
}
