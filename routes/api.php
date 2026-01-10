<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ShoppingListController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware("web")->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth:sanctum')->group(function () {

    // Auth endpoints
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/logout', [AuthController::class, 'logout']);

    // Shopping list API endpoints
    Route::post('/add-shopping-list', [ShoppingListController::class,'store']);
});
