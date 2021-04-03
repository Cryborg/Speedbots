<?php

namespace App\Http\Controllers;

use App\Bases\ControllerBase;
use App\Models\Component;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class ComponentUserController extends ControllerBase
{
    /**
     * Upgrade a component:
     * - the level of the component is incremented
     * - the resources needed to upgrade are removed from the player inventory
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User         $user
     * @param \App\Models\Component    $component
     *
     * @return JsonResponse
     */
    public function update(User $user, Component $component): JsonResponse
    {
        // FIXME: factorize this
        $userHasEnoughMoney = true;

        $component->materials()->each(static function($componentMaterial) use ($user, &$userHasEnoughMoney) {
            $userMaterial = $user->inventory()->where('material_id', $componentMaterial->id)->first()->pivot;

            if ($userMaterial->amount < $componentMaterial->pivot->amount) {
                $userHasEnoughMoney = false;
            }
        });

        if ($userHasEnoughMoney === false) {
            return response()->json([
                'success' => false,
                'message' => trans('user.not_enough_money'),
            ]);
        }

        // Get the user component pivot object
        $user->components->where('id', $component->id)
            ->first()->pivot->increment('level');

        // Remove the resources from the player purse
        $component->materials()->each(static function($componentMaterial) use ($user) {
            $pivot = $user->inventory()->where('material_id', $componentMaterial->id)->first()->pivot;
            $pivot->amount -= $componentMaterial->pivot->amount;
            $pivot->save();
        });

        return response()->json([
            'success' => true,
        ]);
    }
}
