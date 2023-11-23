<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
  return view('welcome');
})->name("welcome");

Route::prefix('auth')->group(function () {
  Route::get('/login', [AuthController::class, "getLogin"])->name('login');
  Route::post('/login', [AuthController::class, "postLogin"])->name('post.login');
  Route::get('/register', [AuthController::class, "getRegister"])->name('register');
  Route::post('/register', [AuthController::class, "postRegister"])->name('post.register');
  Route::get('/logout', [AuthController::class, "getLogout"])->name('logout');
});

Route::resource('welcome-content', HomeController::class);
Route::resource('admin/portfolio', 'PortfolioController');

Route::middleware('auth')->group(function () {
  Route::get('/admin', [HomeController::class, "welcome"])->name("welcome");

  Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
  Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
  Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
  Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
  Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
  Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
  Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
});
