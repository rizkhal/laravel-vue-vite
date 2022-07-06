<?php

use App\Http\Controllers\Json\Select2Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->as('api.v1.')->group(function () {
    Route::controller(Select2Controller::class)->group(function () {
        Route::get('/surahs', 'surahs')->name('surahs');
        Route::get('/rooms', 'rooms')->name('rooms');
        Route::get('/students', 'students')->name('students');
    });
});
