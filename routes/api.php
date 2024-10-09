<?php

use App\Http\Controllers\Api\ActivityController;
use App\Http\Controllers\Api\DivisionController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\GalleryController;
use App\Http\Controllers\Api\TeamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/activities', [ActivityController::class, 'index']);
Route::get('/events', [EventController::class, 'index']);

Route::get('/divisions', [DivisionController::class, 'index']);
Route::get('/division/{slug}', [DivisionController::class, 'show']);

Route::get('/teams', [TeamController::class, 'index']);

Route::get('/galleries', [GalleryController::class, 'index']);
