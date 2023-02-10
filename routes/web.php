<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UserController;
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
    return view('home', [
        "setActiveNav" => "Home",
        "title" => "Home"
    ]);
});


Route::get('/about', function() {
    return view('about', [
        "setActiveNav" => "About",
        "title" => "About"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', [CategoriesController::class, 'get_all']);

Route::get('/categories/{category:slug}', [CategoriesController::class, 'show']);

Route::get('/author/{user:username}', [UserController::class, 'posts']);
