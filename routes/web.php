<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index']);

Route::get('posts/{category:name}', [PostController::class, 'category']);
Route::get('post/{post:slug}', [PostController::class, 'detail']);

Route::get('author/{user:username}', [UserController::class, 'posts']);

Route::get('login/', [LoginController::class, 'index'])->name('login');


Route::get('register/', [RegisterController::class, 'index'])->name('register');
Route::post('register/', [RegisterController::class, 'store']);
