<?php

namespace App\Models;

use App\Classes\Constants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * FIXME: will have to go in a trait when used elsewhere
     *
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Translation\Translator|string|null
     */
    public function getRarityTextAttribute()
    {
        $slug = Constants::RARITY[$this->rarity]['slug'];

        return trans('common.rarity.' . $slug);
    }

    /**
     * FIXME: will have to go in a trait when used elsewhere
     *
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Translation\Translator|string|null
     */
    public function getQualityTextAttribute()
    {
        $slug = Constants::QUALITY[$this->quality]['slug'];

        return trans('common.quality.' . $slug);
    }

    /**
     * Gives the potentially upgraded damage
     *
     * @return mixed
     */
    public function getUpdatedDamageAttribute()
    {
        return $this->pivot->damage;
    }

    /**
     * Get the minimum damage (calculated from quality)
     *
     * @return float|int|mixed
     */
    public function getMinDamageAttribute()
    {
        $bonusValue = Constants::QUALITY[$this->quality]['value'];

        return $this->damage + ($this->damage * ($bonusValue / 100));
    }

    /**
     * Get the maximum damage (calculated from rarity)
     *
     * @return float|int|mixed
     */
    public function getMaxDamageAttribute()
    {
        $bonusValue = Constants::RARITY[$this->rarity]['value'];

        return $this->damage + ($this->damage * ($bonusValue / 100));
    }
}
