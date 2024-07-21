<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', [\App\Http\Controllers\PostController::class,'index']);
Route::get('/posts/{post}/show', [\App\Http\Controllers\PostController::class,'show']);
Route::get('/posts/store', [\App\Http\Controllers\PostController::class,'store']);
Route::get('/posts/{post}/update', [\App\Http\Controllers\PostController::class,'update']);
Route::get('/posts/{post}/delete', [\App\Http\Controllers\PostController::class,'destroy']);

Route::get('/comments', [\App\Http\Controllers\Comment\CommentController::class,'index']);
Route::get('/comments/{comment}/show', [\App\Http\Controllers\Comment\CommentController::class,'show']);
Route::get('/comments/store', [\App\Http\Controllers\Comment\CommentController::class,'store']);
Route::get('/comments/{comment}/update', [\App\Http\Controllers\Comment\CommentController::class,'update']);
Route::get('/comments/{comment}/delete', [\App\Http\Controllers\Comment\CommentController::class,'destroy']);

Route::get('/roles', [\App\Http\Controllers\Role\RoleController::class,'index']);
Route::get('/roles/{role}/show', [\App\Http\Controllers\Role\RoleController::class,'show']);
Route::get('/roles/store', [\App\Http\Controllers\Role\RoleController::class,'store']);
Route::get('/roles/{role}/update', [\App\Http\Controllers\Role\RoleController::class,'update']);
Route::get('/roles/{role}/delete', [\App\Http\Controllers\Role\RoleController::class,'destroy']);

Route::get('/categories', [\App\Http\Controllers\CategorieController::class,'index']);
Route::get('/categories/{categorie}/show', [\App\Http\Controllers\CategorieController::class,'show']);
Route::get('/categories/store', [\App\Http\Controllers\CategorieController::class,'store']);
Route::get('/categories/{categorie}/update', [\App\Http\Controllers\CategorieController::class,'update']);
Route::get('/categories/{categorie}/delete', [\App\Http\Controllers\CategorieController::class,'destroy']);

Route::get('/tags', [\App\Http\Controllers\Tag\TagController::class,'index']);
Route::get('/tags/{tag}/show', [\App\Http\Controllers\Tag\TagController::class,'show']);
Route::get('/tags/store', [\App\Http\Controllers\Tag\TagController::class,'store']);
Route::get('/tags/{tag}/update', [\App\Http\Controllers\Tag\TagController::class,'update']);
Route::get('/tags/{tag}/delete', [\App\Http\Controllers\Tag\TagController::class,'destroy']);

Route::resource('/post', \App\Http\Controllers\PostController::class);
