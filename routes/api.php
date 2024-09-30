<?php

use App\Http\Controllers\Api\DivisionController;
use App\Http\Controllers\Api\TeamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/divisions', [DivisionController::class, 'index']);
Route::get('/division/{slug}', [DivisionController::class, 'show']);

Route::get('/teams', [TeamController::class, 'index']);
