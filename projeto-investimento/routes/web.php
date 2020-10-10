<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Controller::class, 'homePage']);
/*
Routes to user auth
*/
Route::get('/login', [Controller::class, 'fazerLogin']);
Route::post('/login', [Controller::class, 'login'])->name('user.login');
