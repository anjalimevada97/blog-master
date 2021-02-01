<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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

// Route::post('/', function () {
//     return view('login');
// });

Route::view('login', 'login');
Route::post('login', [LoginController::class, 'login']);

Route::view('register', 'register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('logout', [LoginController::class, 'logout']);

Route::view('layout', 'layout');

Route::resource('post', PostController::class);
Route::resource('category', CategoryController::class)->middleware('admin');
// Route::middleware('admin')->group(function (){
//     Route::resource('category', CategoryController::class);
// });