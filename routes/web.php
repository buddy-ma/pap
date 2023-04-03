<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\VilleController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\StatisticsController;
use App\Http\Controllers\Admin\CommercialiserController;

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
        Route::get('/decouvrez', [BlogController::class, 'decouvrez'])->name('blog-decouvrez');
        Route::get('/add', [BlogController::class, 'add'])->name('show-blog-add');
        Route::post('/add', [BlogController::class, 'store'])->name('blog-add');
        Route::get('/add-decouvrez', [BlogController::class, 'addDecouvrez'])->name('show-blog-add-decouvrez');
        Route::post('/add-decouvrez', [BlogController::class, 'storeDecouvrez'])->name('blog-add-decouvrez');
        Route::get('/update/{id?}', [BlogController::class, 'update'])->name('show-blog-update');
        Route::post('/{id?}', [BlogController::class, 'edit'])->name('blog-update');
        Route::delete('/delete/{id?}', [BlogController::class, 'delete'])->name('blog-delete');
        Route::delete('/restore/{id?}', [BlogController::class, 'restore'])->name('blog-restore');
        Route::get('/changeStatus', [BlogController::class, 'changeStatus']);
        Route::post('/ckeditor/upload', [BlogController::class, 'upload'])->name('ckeditor.upload');
        Route::get('/show/{id?}', [BlogController::class, 'show'])->name('show-blog-show');
    });

    //Products
    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'list'])->name('product-list');
        Route::get('/add', [ProductController::class, 'add'])->name('show-product-add');
        Route::post('/add', [ProductController::class, 'store'])->name('product-add');
        Route::get('/update/{id?}', [ProductController::class, 'update'])->name('show-product-update');
        Route::post('/{id?}', [ProductController::class, 'edit'])->name('product-update');
        Route::get('/contacts', [ProductController::class, 'contacts'])->name('product-contacts');
        Route::get('/types', [ProductController::class, 'types'])->name('product-types');
    });

    Route::prefix('villes')->group(function () {
        Route::get('/', [VilleController::class, 'list'])->name('ville-list');
        Route::get('/add', [VilleController::class, 'add'])->name('show-ville-add');
        Route::post('/add', [VilleController::class, 'store'])->name('ville-add');
        Route::get('/edit/{id?}', [VilleController::class, 'edit'])->name('show-ville-edit');
        Route::post('/{id?}', [VilleController::class, 'update'])->name('ville-update');
        Route::get('/delete/{id?}', [VilleController::class, 'delete'])->name('ville-delete');
    });

    //Categorie
    Route::get('/categories', [CategorieController::class, 'list'])->name('categorie-list');

    //commer
    Route::get('/commercialiser-contacts', [CategorieController::class, 'commercialiserContacts'])->name('commercialiser-contacts');
    Route::get('/commercialiser-page', [CommercialiserController::class, 'index'])->name('commercialiser-page');
    Route::post('/commercialiser-page', [CommercialiserController::class, 'store'])->name('commercialiser-page-store');
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
Route::get('/commercialiser', [HomeController::class, 'commercialiser'])->name('commercialiser');
Route::get('/blog/{id?}', [HomeController::class, 'blogDetails'])->name('blogDetails');

Route::post('/commercialiserContact', [HomeController::class, 'commercialiserContact'])->name('commercialiserContact');

// Route::get('/contact', [HomeController::class, 'contact'])->name('contact');