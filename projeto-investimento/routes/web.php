<?php


use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\InstituitionsController;
use App\Http\Controllers\MovimentsController;
use App\Http\Controllers\ProductsController;
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

Route::get('/user/moviment', [MovimentsController::class, 'index'])->name('moviment.index');
Route::get('/moviment', [MovimentsController::class, 'application'])->name('moviment.application');
Route::post('/moviment', [MovimentsController::class, 'storeApplication'])->name('moviment.application.store');
Route::get('/moviment/all', [MovimentsController::class, 'all'])->name('moviment.all');

Route::resource('/user', UsersController::class);
Route::resource('/instituition', InstituitionsController::class);
route::resource('/group', GroupsController::class);
Route::resource('/instituition.product', ProductsController::class);



Route::post('/group/{group_id}/user', [GroupsController::class, 'userStore'])->name('group.user.store');
