<?php

use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\DistrictController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Thành phố
Route::get('cities', [CityController::class, 'index']);
Route::post('cities', [CityController::class, 'store']);
Route::get('cities/{id}', [CityController::class, 'show']);
Route::put('cities/{id}', [CityController::class, 'update']);
Route::delete('cities/{id}', [CityController::class, 'destroy']);

// Quận huyện
Route::get('districts', [DistrictController::class, 'index']);
Route::post('districts', [DistrictController::class, 'store']);
Route::put('districts/{id}', [DistrictController::class, 'update']);
Route::delete('districts/{id}', [DistrictController::class, 'destroy']);
Route::get('cities/{city_id}/districts/{id}', [DistrictController::class, 'showOne']);
Route::get('cities/{city_id}/districts', [DistrictController::class, 'show']);

