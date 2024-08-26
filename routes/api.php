<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BookMDBController;

use App\Http\Controllers\MonitorController;
use Illuminate\Support\Facades\Route;

Route::apiResource('books', BookController::class);

Route::apiResource('mdb-books', BookMDBController::class);


Route::get('health', [MonitorController::class, 'index']);


Route::get('test', function() {
    dd("test");
});