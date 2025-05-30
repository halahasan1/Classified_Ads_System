<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\AdController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and assigned to the "api"
| middleware group. Enjoy building your API!
|
*/

// Authentication Routes

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
});


// Public Routes
Route::get('ads', [AdController::class, 'index']);
Route::get('ads/{ad}', [AdController::class, 'show']);
Route::get('categories', [CategoryController::class, 'index']);
Route::get('categories/{category}', [CategoryController::class, 'show']);

// Protected Routes
Route::middleware('auth:sanctum')->group(function () {
    // Ad Routes
    Route::post('ads', [AdController::class, 'store']);
    Route::put('ads/{ad}', [AdController::class, 'update']);
    Route::delete('ads/{ad}', [AdController::class, 'destroy']);
    Route::get('user/ads/{user}', [AdController::class, 'userAds']);
    Route::put('ads/{ad}/review/{status}', [AdController::class, 'review']);

    // Review Routes
    Route::post('ads/{ad}/reviews', [ReviewController::class, 'store']);
    Route::put('reviews/{review}', [ReviewController::class, 'update']);
    Route::delete('reviews/{review}', [ReviewController::class, 'destroy']);

    //categories routes
    Route::post('categories', [CategoryController::class, 'store']);
    Route::put('categories/{category}', [CategoryController::class, 'update']);
    Route::delete('categories/{category}', [CategoryController::class, 'destroy']);

    // User Routes
    Route::get('user/{user}', [UserController::class, 'show']);
    Route::get('user', [UserController::class, 'index']);
});
