<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Request;
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
Route::get('/signup', function () {
    return view('register');
});

Route::post('post', [PostController::class,'store']);
Route::get('posts',[UserController::class,'index'])->name('posts');
Route::post('login', [SessionsController::class, 'store']);
Route::post('/post/{id}',[PostController::class,'destroy'])->name('post.destroy');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::post('register',[UserController::class,'store']);
