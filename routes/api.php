<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PlatformController;

// CRUD DEVELOPERS

Route::get('/developers', [DeveloperController::class, 'index']);
Route::get('/developers/{id}', [DeveloperController::class, 'show']);
Route::post('/developers/create', [DeveloperController::class, 'create']);
Route::patch('/developers/update', [DeveloperController::class, 'update']);
Route::delete('/developers/delete', [DeveloperController::class, 'delete']);

// CRUD PUBLISHERS

Route::get('/publishers', [PublisherController::class, 'index']);
Route::get('/publishers/{id}', [PublisherController::class, 'show']);
Route::post('/publishers/create', [PublisherController::class, 'create']);
Route::patch('/publishers/update', [PublisherController::class, 'update']);
Route::delete('/publishers/delete', [PublisherController::class, 'delete']);

// CRUD GAMES

Route::get('/games', [GameController::class, 'index']);
Route::get('/games/{id}', [GameController::class, 'show']);
Route::post('/games/create', [GameController::class, 'create']);
Route::patch('/games/update', [GameController::class, 'update']);
Route::delete('/games/delete', [GameController::class, 'delete']);

// CRUD GENRES

Route::get('/genres', [GenreController::class, 'index']);
Route::get('/genres/{id}', [GenreController::class, 'show']);
Route::post('/genres/create', [GenreController::class, 'create']);
Route::patch('/genres/update', [GenreController::class, 'update']);
Route::delete('/genres/delete', [GenreController::class, 'delete']);

// CRUD PLATFORMS

Route::get('/platforms', [PlatformController::class, 'index']);
Route::get('/platforms/{id}', [PlatformController::class, 'show']);
Route::post('/platforms/create', [PlatformController::class, 'create']);
Route::patch('/platforms/update', [PlatformController::class, 'update']);
Route::delete('/platforms/delete', [PlatformController::class, 'delete']);