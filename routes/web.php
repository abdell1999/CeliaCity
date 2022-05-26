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
Route::get('fetch-comments', [App\Http\Controllers\CommentController::class, 'fetchcomments']);
Route::get('fetch-resources', [App\Http\Controllers\ResourceController::class, 'fetchresources']);
Route::get('edit-pointofinterest/{id}', [App\Http\Controllers\PointofinterestController::class, 'edit']);
Route::put('update-pointofinterest/{id}', [App\Http\Controllers\PointofinterestController::class, 'update']);
Route::get('edit-comment/{id}', [App\Http\Controllers\CommentController::class, 'edit']);
Route::put('update-comment/{id}', [App\Http\Controllers\CommentController::class, 'update']);
Route::get('edit-resource/{id}', [App\Http\Controllers\ResourceController::class, 'edit']);
Route::put('update-resource/{id}', [App\Http\Controllers\ResourceController::class, 'update']);
Route::delete('delete-point/{id}', [App\Http\Controllers\PointofinterestController::class, 'destroy']);
Route::delete('delete-comment/{id}', [App\Http\Controllers\CommentController::class, 'destroy']);
Route::delete('delete-resource/{id}', [App\Http\Controllers\ResourceController::class, 'destroy']);
Route::delete('delete-user/{id}', [App\Http\Controllers\UserController::class, 'destroy']);
Route::resource('/categories', 'CategorieController');
Route::get('fetch-categories',[App\Http\Controllers\CategorieController::class, 'fetchAll']);
Route::resource('/users', 'UserController');
Route::resource('/comments','CommentController');
Route::resource('/resources','ResourceController');
Route::get('fetch-user', [App\Http\Controllers\UserController::class, 'fetchuser']);
Route::post('comentar', [App\Http\Controllers\CommentController::class, 'comentar'])->name('comentar');
Route::get('/fetch-comment/{id_pointofinterest}', [App\Http\Controllers\CommentController::class, 'fetchcomment']);
Route::get('/update-comments/{id_pointofinterest}', [App\Http\Controllers\CommentController::class, 'updatecomment']);
Route::delete('/delete-comments/{id_pointofinterest}', [App\Http\Controllers\CommentController::class, 'deletecomment']);
Route::get('guide', [App\Http\Controllers\GuideController::class, 'guide']);
Route::get('guide/{id}', [App\Http\Controllers\GuideController::class, 'showpoint']);
Route::get('myprofile/{id}', [App\Http\Controllers\UserController::class, 'myprofile']);
Route::delete('delete-profile/{id}', [App\Http\Controllers\UserController::class, 'destroy']);
Route::get('edit-profile/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::put('update-profile/{id}', [App\Http\Controllers\UserController::class, 'update']);

Route::get('/options', [App\Http\Controllers\OptionController::class, 'index'])->name('options');
Route::get('/options/get-option/{id}', [App\Http\Controllers\OptionController::class, 'getoption']);
Route::get('/team', function(){
    return view("team.show" );
});
Route::get('/contact', function(){
    return view("team.contact" );
});
Route::put('/options/{id}', [App\Http\Controllers\OptionController::class, 'update'])->name('options.update');
Route::get('/options/get-all/', [App\Http\Controllers\OptionController::class, 'getall']);

Route::get('fetch-onepoint/{id}', [App\Http\Controllers\PointofinterestController::class, 'fetchonepoint']);
