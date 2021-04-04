<?php

namespace App\Http\Controllers\Api;

use App\Bases\ControllerBase;
use App\Models\StellarObject;
use App\Models\StellarSystem;
use App\Traits\CrudTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class StellarObjectController
 *
 * @package App\Http\Controllers
 * @group StellarObject
 */
class StellarObjectController extends ControllerBase
{
    use CrudTrait;

    function model()
    {
        return StellarObject::class;
    }

    protected function storeRules(): array
    {
        return [
            'name'              => 'required',
            'description'       => 'required',
            'type'              => 'required',
            'disappear_at'      => 'nullable'
        ];
    }

    protected function updateRules(): array
    {
        return [
            'stellar_system_id' => 'exists:stellar_systems,id',
            'name'              => '',
            'description'       => '',
            'type'              => '',
            'disappear_at'      => ''
        ];
    }

    /**
     * List stellar objects of a given stellar system
     *
     * @param \App\Models\StellarSystem $stellarSystem Stellar system
     *
     * @return JsonResponse
     */
    public function index(StellarSystem $stellarSystem): JsonResponse
    {
        return response()->json([
            'stellar_objects' => $stellarSystem->stellarObjects,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param \App\Models\StellarSystem                    $stellarSystem Stellar system
     *
     * @return JsonResponse
     */
    public function store(Request $request, StellarSystem $stellarSystem): JsonResponse
    {
        $stellarObject = $stellarSystem->stellarObjects()->create($request->all());

        return response()->json([
            'success'           => $stellarObject instanceof StellarObject,
            'stellar_object_id' => $stellarObject->id
        ]);
    }
}