<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ProgressController;

// Rotte per Travel
Route::resource('travels', TravelController::class);

// Rotte per Destination
Route::resource('destinations', DestinationController::class);

// Rotte per Progress
Route::resource('progress', ProgressController::class);

