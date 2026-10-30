<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\AdminController;


Route::get('/', [HomeController::class, 'index']) ->name('Home');
Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('Dashboard');

