<?php

use Illuminate\Http\Request;
use App\Http\Controllers\PropertyController;
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

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });

//Route::resource('properties', PropertyController::class);

Route::controller(PropertyController::class)->prefix('v1/{user_id}')->group(function () {
    Route::get('/properties', 'index');
    Route::get('/properties/{property_id}', 'show');
});

Route::controller(PropertyController::class)->prefix('v1')->group(function () {
    Route::get('/properties/all', 'all');
});