<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', function (){
    return view('admin.admin_panel');
} );

//Google Auth
//http://127.0.0.1:8000/home/googleauth/callback
Route::get('/googleauth', 'LoginController@redirectGoogle');
Route::get('/googleauth/callback', 'LoginController@callbackGoogle');

//Post Routing
Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])
    ->name('post');

Route::get('/post/create', [\App\Http\Controllers\PostController::class, 'create'])
    ->name('post.create');

Route::post('/post', [\App\Http\Controllers\PostController::class, 'store'])
    ->name('post.store');

Route::get('/post/{id}/edit', [\App\Http\Controllers\PostController::class, 'edit'])
    ->name('post.edit');

Route::put('/post/{id}', [\App\Http\Controllers\PostController::class, 'update'])
    ->name('post.update');

Route::delete('/post/{id}', [\App\Http\Controllers\PostController::class, 'destroy'])
    ->name('post.destroy');

//Close Post Routing
