<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::apiResource('/posts',\App\Http\Controllers\Api\PostController::class);
Route::apiResource('/categories',\App\Http\Controllers\Api\CategoryController::class);
Route::apiResource('/tags',\App\Http\Controllers\Api\TagController::class);
Route::apiResource('/roles',\App\Http\Controllers\Api\RoleController::class);
Route::apiResource('/profiles',\App\Http\Controllers\Api\ProfileController::class);


