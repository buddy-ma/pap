<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\StatisticsController;

Auth::routes(['register' => false]);

Route::redirect('/admin', '/admin/dashboard');

//Admin Pages
Route::group(['prefix' => 'admin', 'middleware' => ['auth:web']], function () {
    Route::get('/dashboard', [StatisticsController::class, 'Dashboard'])->name('dashboard');

    //user
    Route::get('/user', [UserController::class, 'User'])->name('user-list');
    Route::get('/role', [UserController::class, 'Role'])->name('role-list');
    Route::get('/permission', [UserController::class, 'Permission'])->name('permission-list');

    //Blogs
    Route::prefix('blogs')->group(function () {
        Route::get('/', [BlogController::class, 'list'])->name('blog-list');
        Route::get('/add', [BlogController::class, 'add'])->name('show-blog-add');
        Route::post('/add', [BlogController::class, 'store'])->name('blog-add');
        Route::get('/update/{id?}', [BlogController::class, 'update'])->name('show-blog-update');
        Route::post('/{id?}', [BlogController::class, 'edit'])->name('blog-update');
        Route::delete('/delete/{id?}', [BlogController::class, 'delete'])->name('blog-delete');
        Route::delete('/restore/{id?}', [BlogController::class, 'restore'])->name('blog-restore');
        Route::get('/changeStatus', [BlogController::class, 'changeStatus']);
        Route::post('/ckeditor/upload', [BlogController::class, 'upload'])->name('ckeditor.upload');
        Route::get('/show/{id?}', [BlogController::class, 'show'])->name('show-blog-show');
    });

    //Categorie
    Route::get('/categories', [CategorieController::class, 'list'])->name('categorie-list');
});

Route::group(['prefix' => 'admin'], function () {
    //Authentication
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('show-king-login');
    Route::post('/login', [LoginController::class, 'login'])->name('king-login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('king-logout');
});

Route::get('/test', [HomeController::class, 'home'])->name('home');
Route::get('/decouvrezMaroc', [HomeController::class, 'decouvrezMaroc'])->name('decouvrezMaroc');
Route::get('/conseils', [HomeController::class, 'conseils'])->name('conseils');
Route::get('/blog/{id?}', [HomeController::class, 'blogDetails'])->name('blogDetails');

// Route::get('/contact', [HomeController::class, 'contact'])->name('contact');