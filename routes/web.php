<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('homepage');
});

Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index'])->name("register.index");
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store'])->name("register.store");

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name("login.index");
Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate'])->name("login.auth");

Route::get('/dashboard', function() {
    return view('dashboard');
});
