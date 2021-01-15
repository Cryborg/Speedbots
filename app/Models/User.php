<?php

namespace App\Models;

use App\Models\Relations\UserRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens,
        HasFactory,
        Notifiable,
        UserRelationships;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @param mixed ...$roles
     *
     * @return bool
     */
    public function hasRole(...$roles): bool
    {
        foreach ($roles as $role) {
            if ($this->roles->contains('slug', $role)) {
                return true;
            }
        }

        return false;
    }

    public function getCredits()
    {
        return $this->inventory->where('slug', 'credits')->first()->pivot->amount;
    }

    /**
     * Add credits
     *
     * @param int $amount
     *
     * @return User
     */
    public function addCredits(int $amount): User
    {
        $creditsPivot = $this->inventory
            ->where('slug', 'credits')->first()->pivot;
        $creditsPivot->amount += $amount;
        $creditsPivot->save;

        return $this;
    }

    /**
     * Subtract credits
     *
     * @param int $amount
     *
     * @return User
     */
    public function subCredits(int $amount): User
    {
        $creditsPivot = $this->inventory
            ->where('slug', 'credits')->first()->pivot;
        $creditsPivot->amount -= $amount;
        $creditsPivot->save;

        return $this;
    }
}
