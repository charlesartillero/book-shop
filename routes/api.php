<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\MonitorController;
use Illuminate\Support\Facades\Route;

Route::apiResource('books', BookController::class);

Route::get('health', [MonitorController::class, 'index']);
