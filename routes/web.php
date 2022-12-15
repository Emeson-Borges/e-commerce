<?php

use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/', function () {
    return view('welcome');
});
