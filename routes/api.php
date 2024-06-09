<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("api_sign_up",[\App\Http\Controllers\PersonController::class,"api_sign_up"]);
Route::post("api_sign_in",[\App\Http\Controllers\PersonController::class,"api_sign_in"]);

Route::post('api_get_tree_species',[\App\Http\Controllers\TreeSpecieController::class,"api_get_tree_species"]);

Route::post("api_create_tree",[\App\Http\Controllers\TreeController::class,"api_create_tree"]);
Route::post("api_get_trees",[\App\Http\Controllers\TreeController::class,"api_get_trees"]);
