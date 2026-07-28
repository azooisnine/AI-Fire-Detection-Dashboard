<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FireDetectionController;

Route::get('/', [FireDetectionController::class, 'indexWeb']);

// Route::post('/fire-update', [FireDetectionController::class, 'store']);

// Route::get('/fire-status', [FireDetectionController::class, 'getLatestStatus']);

// Route::get('/fire-history', [\App\Http\Controllers\Api\FireDetectionController::class, 'history']);