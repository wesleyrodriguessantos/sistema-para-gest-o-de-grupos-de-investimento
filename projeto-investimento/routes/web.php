<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Controller::class, 'homePage']);
/*
Routes to user auth
*/
Route::get('/login', [Controller::class, 'fazerLogin']);
Route::post('/login', [DashboardController::class, 'auth'])->name('user.login');
Route::post('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
