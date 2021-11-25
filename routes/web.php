<?php

use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/posts', [PublicController::class, 'posts'])->name('posts');

Route::middleware(['auth'])->group(function() {
//    Route::get('/admin', [\App\Http\Controllers\PostController::class, 'index']);
//    Route::get('/admin/posts/create', [\App\Http\Controllers\PostController::class, 'create']);
//    Route::post('/admin/posts', [\App\Http\Controllers\PostController::class, 'store']);
//    Route::get('/admin/posts/{post}/edit', [\App\Http\Controllers\PostController::class, 'edit']);
//    Route::post('/admin/posts/{post}', [\App\Http\Controllers\PostController::class, 'update']);
//    Route::get('/admin/posts/{post}/delete', [\App\Http\Controllers\PostController::class, 'destroy']);
    Route::resource('admin/posts', \App\Http\Controllers\PostController::class);

    Route::get('/user/profile', function() {
        return view('profile');
    })->name('profile');
});
