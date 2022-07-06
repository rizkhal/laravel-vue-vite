<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', DashboardController::class)->name('dashboard')->middleware(['auth:guru,siswa,admin']);
