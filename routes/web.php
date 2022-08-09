<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminContactsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminServicesController;
use App\Http\Controllers\Admin\AdminSliderController;
use App\Http\Controllers\Admin\AdminUsersController;

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

    // SLIDER ROUTES
    Route::get('/admin/slider', [AdminSliderController::class, 'index'])->name('admin-users');
    Route::get('/admin/slider/new', [AdminSliderController::class, 'new'])->name('admin-users-new');
    Route::post('/admin/slider/save', [AdminSliderController::class, 'save'])->name('admin-users-save');
    Route::get('/admin/slider/edit/{id}', [AdminSliderController::class, 'edit'])->name('admin-users-edit');
    Route::post('/admin/slider/update/{id}', [AdminSliderController::class, 'update'])->name('admin-users-update');
    Route::delete('/admin/slider/delete/{id}', [AdminSliderController::class, 'delete'])->name('admin-users-delete');

    // ABOUT ROUTES
    Route::get('/admin/about', [AdminAboutController::class, 'index'])->name('admin-about');
    Route::get('/admin/about/edit', [AdminAboutController::class, 'edit'])->name('admin-about-edit');
    Route::post('/admin/about/update', [AdminAboutController::class, 'update'])->name('admin-about-update');

    // PROFILE ROUTES
    Route::get('/admin/profile', [AdminProfileController::class, 'index'])->name('admin-profile');
    Route::get('/admin/profile/edit', [AdminProfileController::class, 'edit'])->name('admin-profile-edit');
    Route::post('/admin/profile/update', [AdminProfileController::class, 'update'])->name('admin-profile-update');

    // CONTACTS ROUTES
    Route::get('/admin/contacts', [AdminContactsController::class, 'index'])->name('admin-contacts');
    Route::get('/admin/contacts/edit', [AdminContactsController::class, 'edit'])->name('admin-contacts-edit');
    Route::post('/admin/contacts/update', [AdminContactsController::class, 'update'])->name('admin-contacts-update');

    // USERS ROUTES
    Route::get('/admin/users', [AdminUsersController::class, 'index'])->name('admin-users');
    Route::get('/admin/user/edit/{id}', [AdminUsersController::class, 'edit'])->name('admin-users-edit');
    Route::post('/admin/user/update/{id}', [AdminUsersController::class, 'update'])->name('admin-users-update');
    Route::get('/admin/user/new', [AdminUsersController::class, 'new'])->name('admin-users-new');
    Route::post('/admin/user/save', [AdminUsersController::class, 'save'])->name('admin-users-save');
    Route::get('/admin/user/editPass/{id}', [AdminUsersController::class, 'editPassword'])->name('admin-users-editPass');
    Route::post('/admin/user/updatePass/{id}', [AdminUsersController::class, 'updatePassword'])->name('admin-users-updatePass');
    Route::delete('/admin/user/delete/{id}', [AdminUsersController::class, 'delete'])->name('admin-users-delete');

    // SERVICES ROUTES
    Route::get('/admin/services', [AdminServicesController::class, 'index'])->name('admin-users');
    Route::get('/admin/service/new', [AdminServicesController::class, 'new'])->name('admin-users-new');
    Route::post('/admin/service/save', [AdminServicesController::class, 'save'])->name('admin-users-save');
    Route::get('/admin/service/editBack', [AdminServicesController::class, 'editBackground'])->name('admin-users-editBack');
    Route::post('/admin/service/updateBack', [AdminServicesController::class, 'updateBackground'])->name('admin-users-updateBack');
    Route::get('/admin/service/edit/{id}', [AdminServicesController::class, 'edit'])->name('admin-users-edit');
    Route::post('/admin/service/update/{id}', [AdminServicesController::class, 'update'])->name('admin-users-update');
    Route::delete('/admin/service/delete/{id}', [AdminServicesController::class, 'delete'])->name('admin-users-delete');
    Route::get('/admin/service/gallery/{id}', [AdminServicesController::class, 'images'])->name('admin-users-images');
    Route::get('/admin/service/addImg/{id}', [AdminServicesController::class, 'addImage'])->name('admin-users-addImg');
    Route::post('/admin/service/saveImg/{id}', [AdminServicesController::class, 'saveImage'])->name('admin-users-update');
    Route::get('/admin/service/editImg/{id}', [AdminServicesController::class, 'editImage'])->name('admin-users-addImg');
    Route::post('/admin/service/updateImg/{id}', [AdminServicesController::class, 'updateImage'])->name('admin-users-updateImg');
    Route::delete('/admin/service/deleteImg/{id}', [AdminServicesController::class, 'deleteImage'])->name('admin-users-deleteImg');

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
