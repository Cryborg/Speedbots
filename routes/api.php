<?php

use App\Http\Controllers\CircuitController;
use App\Http\Controllers\ComponentUserController;
use App\Http\Controllers\GalaxyController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\RaceShipController;
use App\Http\Controllers\ShipComponentController;
use App\Http\Controllers\StellarSystemController;
use App\Http\Controllers\StellarObjectController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\ShipController;
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
Route::post('register', [UserController::class, 'register'])->name('user.register');
Route::post('login', [UserController::class, 'login'])->name('user.login');

// sanctum auth middleware routes
Route::middleware('auth:sanctum')->group(function() {
    Route::post('logout', [UserController::class, 'logout'])->name('user.logout');
    Route::get('user', [UserController::class, 'show'])->name('user.show');

    Route::apiResource('circuits', CircuitController::class);

    Route::apiResource('components', ComponentController::class);

    Route::apiResource('galaxies', GalaxyController::class);

    Route::apiResource('materials', MaterialController::class);

    Route::apiResource('races', RaceController::class);
    Route::apiResource('race.ship', RaceShipController::class)->only(['update', 'destroy']);

    Route::apiResource('ships', ShipController::class);

    Route::apiResource('stellar_objects', StellarObjectController::class)->except(['index', 'store']);
    Route::apiResource('stellar_systems.stellar_objects', StellarObjectController::class)->only(['index', 'store']);

    Route::apiResource('stellar_systems', StellarSystemController::class)->except(['index', 'store']);
    Route::apiResource('galaxies.stellar_systems', StellarSystemController::class)->only(['index', 'store']);

    Route::apiResource('user.component', ComponentUserController::class)
         ->only('update')->name('update', 'component.upgrade');
    Route::apiResource('user.inventory', InventoryController::class);

    Route::apiResource('weapons', WeaponController::class);
});
