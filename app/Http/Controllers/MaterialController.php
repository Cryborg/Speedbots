<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Traits\CrudTrait;

class MaterialController extends Controller
{
    use CrudTrait;

    public function model()
    {
        return Material::class;
    }

    protected function storeRules(): array
    {
        return [
            'slug'   => 'required',
            'rarity' => 'required|integer',
            'value'  => 'nullable|integer',
        ];
    }

    protected function updateRules(): array
    {
        // We shouldn't have to update the slug
        return [
            //'slug'   => '',
            'rarity' => 'integer',
            'value'  => 'integer',
        ];
    }
}
