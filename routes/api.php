<?php

use App\Http\Controllers\CircuitController;
use App\Http\Controllers\GalaxyController;
use App\Http\Controllers\StellarSystemController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\ShipController;
use App\Http\Controllers\UpgradeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeaponController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// user controller routes
Route::post("register", [UserController::class, "register"]);
Route::post("login", [UserController::class, "login"]);

// sanctum auth middleware routes
Route::middleware('auth:api')->group(function() {
    Route::get("user", [UserController::class, "user"]);
    Route::apiResource('ships', ShipController::class);
    Route::apiResource('components', ComponentController::class);
    Route::apiResource('circuits', CircuitController::class);
    Route::apiResource('galaxies', GalaxyController::class);
    Route::apiResource('stellar_systems', StellarSystemController::class);
    Route::apiResource('upgrades', UpgradeController::class);
    Route::apiResource('weapons', WeaponController::class);
});
