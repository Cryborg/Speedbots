<?php

namespace App\Policies;

use App\Models\Ship;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShipPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Ship  $ship
     * @return mixed
     */
    public function view(User $user, Ship $ship)
    {
        return $ship->user()->is($user)
               || $user->hasRole('admin');

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Ship  $ship
     * @return mixed
     */
    public function update(User $user, Ship $ship)
    {
        return $ship->user()->is($user)
            || $user->hasRole('admin');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Ship  $ship
     * @return mixed
     */
    public function delete(User $user, Ship $ship)
    {
        return $ship->user()->is($user)
               || $user->hasRole('admin');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Ship  $ship
     * @return mixed
     */
    public function restore(User $user, Ship $ship)
    {
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Ship  $ship
     * @return mixed
     */
    public function forceDelete(User $user, Ship $ship)
    {
        return $user->hasRole('admin');

    }
}
