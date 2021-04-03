<?php

namespace App\Http\Controllers;

use App\Bases\ControllerBase;
use App\Http\Requests\StellarObjectStoreRequest;
use App\Http\Requests\StellarObjectUpdateRequest;
use App\Models\StellarObject;
use App\Models\StellarSystem;
use App\Traits\CrudTrait;
use Illuminate\Http\JsonResponse;

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
     * @param \App\Http\Requests\StellarObjectStoreRequest $request
     * @param \App\Models\StellarSystem                    $stellarSystem Stellar system
     *
     * @return JsonResponse
     */
    public function store(StellarObjectStoreRequest $request, StellarSystem $stellarSystem): JsonResponse
    {
        $stellarObject = $stellarSystem->stellarObjects()->create($request->all());

        return response()->json([
            'success'           => $stellarObject instanceof StellarObject,
            'stellar_object_id' => $stellarObject->id
        ]);
    }
}
