<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BookMDBController;

use App\Http\Controllers\MonitorController;
use Illuminate\Support\Facades\Route;

Route::apiResource('books', BookController::class);

Route::apiResource('mdb-books', BookMDBController::class);

Route::apiResource('test', BookController::class);


Route::get('health', [MonitorController::class, 'index']);
