<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('index');
});

Route::view('login', 'login');
Route::post('login', [LoginController::class, 'login']);

Route::view('register', 'register');
Route::post('register', [RegisterController::class, 'register']);

Route::view('index', 'index');
Route::view('layout', 'layout');
// Route::view('create', 'post.create');
// Route::view('edit', 'category.edit');

// Route::view('list', 'category.list');

Route::resource('category', CategoryController::class);

Route::resource('post', PostController::class);
