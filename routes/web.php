<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

// posts management
Route::get('/posts/index', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');


// register and auhtentication
Route::get('/register/form', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register/store', [AuthController::class, 'register'])->name('register.store');
Route::get('/login/form', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login/store', [AuthController::class, 'login'])->name('login.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


//profile
Route::get('/profile/show', [AuthController::class, 'logout'])->name('profile.show');

Route::get('/', function () {
    return view('welcome');
});
