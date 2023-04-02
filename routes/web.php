<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/home', function () {
    return view('home');
});

// Profile Routes

Route::get('/profile', [ProfileController::class, 'viewProfile'])->name('profile.view');
Route::get('/editprofile', [ProfileController::class, 'index'])->name('profile.edit');
Route::post('/editprofile', [ProfileController::class, 'store'])->name('profile.save');

// Home Routes for post and newsfeed

Route::get('/home', [PostController::class, 'index'])->name('home.view');
Route::post('/home', [PostController::class, 'store'])->name('post.save');

Route::get('/contact', function () {
    return view('contacts');
});
Route::get('/chat', function () {
    return view('chat2');
});
