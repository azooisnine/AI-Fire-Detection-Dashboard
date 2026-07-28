<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FireDetectionController;

Route::post('/fire-update', [FireDetectionController::class, 'store']);
Route::get('/fire-status', [FireDetectionController::class, 'getLatestStatus']);
Route::get('/fire-history', [FireDetectionController::class, 'history']);