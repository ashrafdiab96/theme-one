<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\WelcomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// HOME ROUTES
Route::get('/', [WelcomeController::class, 'index'])->name('about');

// LANGUAGE ROUTE
Route::get('/language/{lang}', [LanguageController::class, 'change_laguage'])->name('language.change');

// ABOUT ROUTES
Route::get('/about', [AboutController::class, 'index'])->name('about');

// COMPANY PROFILE ROUTES
Route::get('/profile', [CompanyProfileController::class, 'index'])->name('profile');

// SERVICES ROUTES
Route::get('/services', [ServicesController::class, 'index'])->name('services');

// PROJECTS ROUTES
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');

// BLOGS ROUTES
Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs');

// CONTACTS ROUTES
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
