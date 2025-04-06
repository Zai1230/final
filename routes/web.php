<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/',[AuthController::class, 'showlogin']);
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/register',[AuthController::class,'showRegister'])->name('Register');

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
