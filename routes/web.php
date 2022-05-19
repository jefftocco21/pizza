<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//All Posts
Route::get('/', [PostController::class, 'index']);

//Create Post Form
Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');

//Store Post Data
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');

//Show Form to Edit
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->middleware('auth');

//Update put request
Route::put('/posts/{post}', [PostController::class, 'update'])->middleware('auth');

//Delete Post
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->middleware('auth');

//Single Post
Route::get('/posts/{post}', [PostController::class, 'show']);

//Registration Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//User Creation
Route::post('/users', [UserController::class, 'store']);

//Log User out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
