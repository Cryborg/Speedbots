<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

trait CrudTrait
{
    abstract public function model();

    abstract protected function storeRules(): array;
    abstract protected function updateRules(): array;

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(
            $this->model()::all()
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        Validator::make($request->all(), $this->storeRules())->validate();

        return response()->json(
            $this->model()::create($request->all())
        );
    }

    /**
     * @param $resource_id
     *
     * @return JsonResponse
     */
    public function show($resource_id): JsonResponse
    {
        return response()->json(
            $this->model()::findOrFail($resource_id)
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param                          $resource_id
     *
     * @return JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $resource_id): JsonResponse
    {
        $resource = $this->model()::findOrFail($resource_id);

        Validator::make($request->all(), $this->updateRules())->validate();

        return response()->json([
            'success' => $resource->update($request->all())
        ]);
    }

    /**
     * @param $resource_id
     *
     * @return JsonResponse
     */
    public function destroy($resource_id): JsonResponse
    {
        $resource = $this->model()::findOrFail($resource_id);

        return response()->json([
            'success' => $resource->delete()
        ]);
    }
}
