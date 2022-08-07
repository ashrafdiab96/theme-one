<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Admin\AdminHomeController;


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
Route::get('/service/{id}', [ServicesController::class, 'service'])->name('service');

// PROJECTS ROUTES
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/project/{id}', [ProjectsController::class, 'project'])->name('project');

// BLOGS ROUTES
Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs');
Route::get('/blog/{id}', [BlogsController::class, 'blog'])->name('blog');

// CONTACTS ROUTES
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::post('/contact/message', [ContactsController::class, 'message'])->name('message');


// ADMIN ROUTES
// LOGIN ROUTES
Route::get('/admin/login', [LoginController::class, 'index'])->name('login-page');
Route::post('/admin/handle_login', [LoginController::class, 'login'])->name('login');

Route::middleware('auth')->group(function() {
    // LOGOUT ROUTE
    Route::get('/admin/logout', [LoginController::class, 'logout'])->name('logout');

    // DASHBOARD ROUTES
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // HOME ROUTES
    Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin-home');
    Route::get('/admin/home/edit', [AdminHomeController::class, 'edit'])->name('admin-home-edit');
    Route::post('/admin/home/update', [AdminHomeController::class, 'update'])->name('admin-home-update');

    // ABOUT ROUTES
    Route::get('/admin/about', [AdminAboutController::class, 'index'])->name('admin-about');
    Route::get('/admin/about/edit', [AdminAboutController::class, 'edit'])->name('admin-about-edit');
    Route::post('/admin/about/update', [AdminAboutController::class, 'update'])->name('admin-about-update');

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
