<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeaponStoreRequest;
use App\Http\Requests\WeaponUpdateRequest;
use App\Models\Weapon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class WeaponController
 *
 * @package App\Http\Controllers
 * @group Weapon
 */
class WeaponController extends Controller
{
    /**
     * List weapons
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $weapons = Weapon::all();

        return response()->json([
            'weapons' => $weapons,
        ]);
    }

    /**
     * Create a weapon
     *
     * @param \App\Http\Requests\WeaponStoreRequest $request
     *
     * @return JsonResponse
     */
    public function store(WeaponStoreRequest $request): JsonResponse
    {
        $weapon = Weapon::create($request->all());

        return response()->json([
            'success' => $weapon instanceof Weapon,
            'weapon_id' => optional($weapon)->id,
        ]);
    }

    /**
     * Show weapon details
     *
     * @param \App\Models\Weapon $weapon
     *
     * @return JsonResponse
     */
    public function show(Weapon $weapon): JsonResponse
    {
        return response()->json($weapon);
    }

    /**
     * Update a weapon
     *
     * @param \App\Http\Requests\WeaponUpdateRequest $request
     * @param \App\Models\Weapon                     $weapon
     *
     * @return JsonResponse
     */
    public function update(WeaponUpdateRequest $request, Weapon $weapon): JsonResponse
    {
        $updated = $weapon->update($request->all());

        return response()->json([
            'success' => $updated,
        ]);
    }

    /**
     * Delete a weapon
     *
     * @param \App\Models\Weapon $weapon
     *
     * @return JsonResponse
     * @throws \Exception
     */
    public function destroy(Weapon $weapon): JsonResponse
    {
        $deleted = $weapon->delete();

        return response()->json([
            'success' => $deleted,
        ]);
    }
}
