<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Seller\SellerController;
// Admin Routes
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ManageUserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ManageSellerController;
use App\Http\Controllers\Admin\ManageProductsController;

// Seller Routes
use App\Http\Controllers\Seller\StoreController;
use App\Http\Controllers\Seller\FilterController;

Route::get('/', function () {
    return view('dashboard.user.home');
})->name('/');

Auth::routes();
//For Normal Users
Route::prefix('user')->name('user.')->group(function(){
    Route::middleware(['guest', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'dashboard.user.login')->name('login');
        Route::view('/register', 'dashboard.user.register')->name('register');
        Route::post('/create', [UserController::class, 'create'])->name('create');
        Route::post('/check', [UserController::class, 'check'])->name('check');
    });
        Route::middleware(['auth', 'PreventBackHistory'])->group(function () {
        Route::view('/home', 'dashboard.user.home')->name('home');
        Route::post('/logout', [UserController::class , 'logout'])->name('logout');
    });
});

//For Admins 
Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });
    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.admin.home')->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
        Route::get('/users', [ManageUserController::class, 'index'])->name('users');
        Route::get('/users/delete/{id}', [ManageUserController::class, 'delete']);
        Route::resource('categories', CategoryController::class);
        Route::resource('subcategories', SubCategoryController::class);
        Route::resource('stores', ManageSellerController::class);
        Route::resource('products', ManageProductsController::class);
    });
});
//For Sellers 
Route::prefix('seller')->name('seller.')->group(function(){
       
    Route::middleware(['guest:seller','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.seller.login')->name('login');
          Route::view('/register', 'dashboard.seller.register')->name('register');
          Route::post('/create', [SellerController::class, 'create'])->name('create');
          Route::post('/check',[SellerController::class,'check'])->name('check');
    });
    Route::middleware(['auth:seller','PreventBackHistory'])->group(function(){
        Route::post('/logout',[SellerController::class,'logout'])->name('logout');
        Route::resource('shop', StoreController::class);
        Route::get('filter/{id}', [FilterController::class, 'filter'])->name('filter');
    });
});
