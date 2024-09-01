<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\NoteController;

// Rotte per Travel
Route::resource('travels', TravelController::class);

// Rotte per Destination
Route::resource('destinations', DestinationController::class);

// Rotte per Progress
Route::resource('progress', ProgressController::class);

// Rotte per To-Do List
Route::resource('todos', TodoController::class);

Route::resource('notes', NoteController::class);
Route::put('notes/{id}', [NoteController::class, 'update']);
Route::apiResource('notes', NoteController::class);
Route::get('notes/latest', [NoteController::class, 'latest']);

