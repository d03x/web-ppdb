<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\LoginController;
Route::get('/login', LoginController::class)->name('auth.login');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login.post');