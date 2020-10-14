<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstituitionsController;
use App\Http\Controllers\UsersController;
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
Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');

Route::resource('/user', UsersController::class);
Route::resource('/instituition', InstituitionsController::class);
