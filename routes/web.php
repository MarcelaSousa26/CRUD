<?php

use app\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
