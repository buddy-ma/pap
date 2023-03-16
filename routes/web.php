<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\LandingController;
use App\Http\Controllers\Admin\StatisticsController;

Auth::routes(['register' => false]);

// Route::redirect('/', '/art');
Route::redirect('/admin', '/admin/dashboard');

//Admin Pages
Route::group(['prefix' => 'admin', 'middleware' => ['auth:web']], function () {
    Route::get('/dashboard', [StatisticsController::class, 'Dashboard'])->name('dashboard');

    //user
    Route::get('/user', [UserController::class, 'User'])->name('user-list');
    Route::get('/role', [UserController::class, 'Role'])->name('role-list');
    Route::get('/permission', [UserController::class, 'Permission'])->name('permission-list');

    Route::get('/products', [LandingController::class, 'Products'])->name('products');
    Route::get('/orders', [LandingController::class, 'Orders'])->name('orders');
    Route::get('/status', [LandingController::class, 'Status'])->name('status');
    Route::get('/emails', [LandingController::class, 'Emails'])->name('emails');

    Route::get('/profile', [LandingController::class, 'Profile'])->name('profile');
    Route::get('/headers', [LandingController::class, 'Header'])->name('headers');
    Route::get('/services', [LandingController::class, 'Services'])->name('services');
    Route::get('/numbers', [LandingController::class, 'Numbers'])->name('numbers');
    Route::get('/plans', [LandingController::class, 'Plans'])->name('plans');
    Route::get('/designs', [LandingController::class, 'Designs'])->name('designs');

    Route::get('/translations', [LandingController::class, 'Translations'])->name('translations');
    Route::get('/settings', [LandingController::class, 'Settings'])->name('settings');
});

Route::group(['prefix' => 'admin'], function () {
    //Authentication
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('show-king-login');
    Route::post('/login', [LoginController::class, 'login'])->name('king-login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('king-logout');
});

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
