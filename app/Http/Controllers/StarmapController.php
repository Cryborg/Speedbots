<?php

namespace App\Http\Controllers;

use App\Models\StellarObject;
use Illuminate\Support\Facades\View;

class StarmapController extends Controller
{
    public function starmap()
    {
        $drawings = collect();

        $stellarObjects = StellarObject::whereIn('type', ['star', 'shipwreck', 'asteroid'])->get();

        $stellarObjects->each(static function ($star) use (&$drawings) {
            $drawings->push('drawCircle(' . $star->coord_x . ',' . $star->coord_y . ',\'' . $star->type . '\');');
        });

        return View::make('controllers.starmap.starmap', [
            'stellarObjects' => $drawings
        ]);
    }
}
