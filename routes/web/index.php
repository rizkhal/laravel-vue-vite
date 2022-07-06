<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReadingQuranController;

Route::get('/', DashboardController::class)->name('dashboard')->middleware(['auth:guru,siswa,admin']);

Route::middleware(['auth:guru,admin'])->group(function () {
    Route::resource('reading-quran', ReadingQuranController::class);
});
