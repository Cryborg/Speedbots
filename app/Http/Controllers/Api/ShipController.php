<?php

namespace App\Http\Controllers\Api;

use App\Bases\ControllerBase;
use App\Models\Ship;
use App\Models\User;
use App\Traits\CrudTrait;
use Illuminate\Http\JsonResponse;

/**
 * Class ShipController
 *
 * @package App\Http\Controllers
 * @group Ship
 */
class ShipController extends ControllerBase
{
    use CrudTrait;

    function model()
    {
        return Ship::class;
    }

    protected function storeRules(): array
    {
        return [
            'user_id' => 'required|exists:users,id',
            'name'    => 'required',
            'class'   => 'required',
            'health'  => '',
        ];
    }

    protected function updateRules(): array
    {
        return [
            'user_id' => 'exists:users,id',
            'name'    => '',
            'class'   => '',
            'health'  => '',
        ];
    }

    /**
     * List ships of a given user
     *
     * @param \App\Models\User $user
     *
     * @return JsonResponse
     */
    public function index(User $user): JsonResponse
    {
        $ships = $user->ships;

        return response()->json($ships);
    }
}
