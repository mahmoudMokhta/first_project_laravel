<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

// use App\Http\Controllers\UserController;






Route::get('/', function () {
    return view('index')  ;
})->name('home');

Route::resource('users', UserController::class);
Route::get('/register', [UserController::class,'register'])->name('register');
Route::get('/login', [UserController::class,'login'])->name('login');
Route::post('/users/check', [UserController::class,'check'])->name('users.check');
Route::get('/profile', [UserController::class,'profile'])->name('users.profile');
Route::get('/logout', [UserController::class,'logout'])->name('users.logout');
Route::get('/login/home', [UserController::class,'errorLogin'])->name('login.fromHome');



Route::controller( PostController::class)->group(function (){

    Route::get('/posts', 'index')->name('posts.index');
    Route::get('/posts/create', 'create')->name('posts.create');
    Route::post('/posts', 'create')->name('posts.store');
    Route::post('/posts/edit/{id}', 'edit')->name('posts.edit');
    Route::put('/posts/update/{id}', 'update')->name('posts.update');
    Route::delete('/posts/{id}', 'destroy')->name('posts.destroy');
});


