<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IgmIndiaCfsController;
use App\Http\Controllers\IgmIndiaWeightController;
use App\Http\Controllers\IgmIndiaTerminalsController;
use App\Http\Controllers\IgmIndiaSubCodesController;
use App\Http\Controllers\IgmLankaDoContainersController;
use App\Http\Controllers\IgmContainersController;
use App\Http\Controllers\IgmLankaDoController;
use App\Http\Controllers\IgmCarrierController;
use App\Http\Controllers\IgmIndiaContainersController;
use App\Http\Controllers\IgmIndiaCargoInfoController;
use App\Http\Controllers\IgmIndiaController;
use App\Http\Controllers\IgmController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('igm_india_cfs', IgmIndiaCfsController::class);
Route::resource('igm_india_weights', IgmIndiaWeightController::class);
Route::resource('igm_india_terminals', IgmIndiaTerminalsController::class);
Route::resource('igm_india_sub_codes', IgmIndiaSubCodesController::class);
Route::resource('igm_lanka_do_containers', IgmLankaDoContainersController::class);
Route::resource('igm_containers', IgmContainersController::class);
Route::resource('igm_lanka_dos', IgmLankaDoController::class);
Route::resource('igm_carriers', IgmCarrierController::class);
Route::resource('igm_india_containers', IgmIndiaContainersController::class);
Route::resource('igm_india_cargo_infos', IgmIndiaCargoInfoController::class);
Route::resource('igm_indias', IgmIndiaController::class);
Route::resource('igms', IgmController::class);
