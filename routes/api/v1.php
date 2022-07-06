<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CategoryJsonController;
use App\Http\Controllers\Api\V1\PassionJsonController;

Route::prefix('v1')->as('v1.')->group(function () {
    Route::apiResource('passions', PassionJsonController::class);
    Route::apiResource('categories', CategoryJsonController::class);
});
