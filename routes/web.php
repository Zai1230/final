<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/',[AuthController::class, 'showlogin']);


Route::get('/dashboard',[AuthController::class,'Dashboard'])->name('Dashboard');

Route::get('/user', [UserController::class, 'showUsers'])->name ('Users');

Route::controller((SocialController::class))->group(function(){

    // Google Auth
    Route::get('/auth/google', 'RedirectToGoogle');
    Route::get('/auth/google/callback', 'handleGoogleCallBack');

    // Facebook Auth
    Route::get('auth/facebook', 'redirectToFacebook');
    Route::get('auth/facebook/callback', 'handleFacebookCallBack');

});

Route::controller(AuthController::class)->group(function(){
    Route::get('/logout','logout')->name('logout');
    Route::get('/register','showRegister')->name('Register');

    Route::post('/login', 'Login')->name('Log-auth');
    Route::post('/registered', 'Register')->name('Registered');
});


Route::controller(ProductController::class)->group(function(){

    Route::get('/products', 'index')->name('Product');
});


Route::controller(CategoryController::class)->group(function(){

    Route::get('/category', 'index')->name('Category');
});

