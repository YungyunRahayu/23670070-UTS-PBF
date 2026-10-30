<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonialElementController;



Route::get('/', [HomeController::class, 'index']) ->name('Home');
Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('Dashboard');
Route::get('/about', [AboutController::class, 'index'])->name('About');
Route::get('/activities', [ActivitiesController::class, 'index'])->name('Activities');
Route::get('/blog', [BlogController::class, 'index'])->name('Blog');
Route::get('/contact', [ContactController::class, 'index'])->name('Contact');
Route::get('/testimonial-element', [TestimonialElementController::class, 'index'])->name('TestimonialElement');

Route::get('/calendar', [CalendarController::class, 'index'])->name('Calendar');
Route::get('/forms-elements', [FormsElementsController::class, 'index'])->name('FormsElements');
Route::get('/login', [LoginController::class, 'index'])->name('Login');
Route::get('/tables-datatables', [TablesDatatablesController::class, 'index'])->name('TablesDatatables');
Route::get('/ui-sweetalerts', [SweetalertsController::class, 'index'])->name('Sweetalerts');

