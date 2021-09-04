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

Route::get('/', function () {
    return redirect("/posts");
});

Route::get('/posts', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create')->middleware('auth');

Route::post('/posts', 'PostsController@store')->middleware('auth');

Route::get('/posts/{id}', 'PostsController@show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
