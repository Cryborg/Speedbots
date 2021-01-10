<?php

namespace App\Classes;

use function GuzzleHttp\Promise\queue;

class Constants
{
    /**
     * Quality of a component
     *
     * This will impact the max value of a component characteristic.
     * Examples:
     * - for a weapon:
     *      - max damage = weapon.damage + (value)%
     *      - max accuracy = weapon.accuracy + (value)%
     */
    public const QUALITY = [
        1 => [
            'slug' => 'bronze',
            'value' => 0,
        ],
        2 => [
            'slug' => 'silver',
            'value' => 20,
        ],
        3 => [
            'slug' => 'gold',
            'value' => 40,
        ],
        4 => [
            'slug' => 'platinum',
            'value' => 80,
        ],
        5 => [
            'slug' => 'diamond',
            'value' => 100,
        ],
    ];

    /**
     * Rarity of a component
     *
     * The rarer a component, the higher its minimum characteristics.
     *
     * Example:
     * - a 'common' weapon has accuracy = 50 and damage = 20
     * - the same 'epic' weapon has accuracy + (value)%
     *
     * Calculation becomes:
     * - (weapon.damage + (rarity.value)%) + (weapon.damage + (quality.value)%)
     * - (same for accuracy)
     *
     * So for a damage = 10 weapon, a legendary diamond weapon has:
     * - (10 + 100%) = 20 min damage (when the weapon is bought)
     * - it can be upgraded to (20 + 100%) = 40
     *
     * While the same rare silver weapon would have:
     * - (10 + 40%) = 14 minimum damage
     * - (14 + 40%) = 19.6 max damage
     */
    public const RARITY = [
        1 => [
            'slug' => 'common',
            'value' => 0,
        ],
        2 => [
            'slug' => 'uncommon',
            'value' => 20,
        ],
        3 => [
            'slug' => 'rare',
            'value' => 40,
        ],
        4 => [
            'slug' => 'epic',
            'value' => 80,
        ],
        5 => [
            'slug' => 'legendary',
            'value' => 100,
        ],
    ];
}
