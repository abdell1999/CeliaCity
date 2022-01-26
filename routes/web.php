<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home2');
Route::resource('/pointofinterests', 'PointofinterestController');
Route::get('fetch-point', [App\Http\Controllers\PointofinterestController::class, 'fetchpoint']);
Route::get('edit-pointofinterest/{id}', [App\Http\Controllers\PointofinterestController::class, 'edit']);
Route::delete('delete-point/{id}', [App\Http\Controllers\PointofinterestController::class, 'destroy']);
Route::resource('/categories', 'CategorieController');
Route::resource('/users', 'UserController');
Route::resource('/comments','CommentController');
Route::resource('/resources','ResourceController');

Route::get('fetch-user', [App\Http\Controllers\UserController::class, 'fetchuser']);
