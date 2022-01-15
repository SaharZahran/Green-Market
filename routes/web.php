<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', function(){
    return view('public.contact');
})->name('contact');

Route::middleware(['isAdmin'])->group(function () {
    Route::get('/admin', function(){
        return view('admin.index');
    });
});
