<?php

use App\Http\Controllers\Frontend\Auth\LoginController;
use App\Http\Controllers\Frontend\Home\HomeController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'user', 'as' => 'user.'], function(){
    Route::get('/register/page', [LoginController::class, 'registerPage'])->name('register.page');
    Route::post('/regiser', [LoginController::class, 'register'])->name('register');
    Route::get('login/page', [LoginController::class, 'loginPage'])->name('login.page');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::middleware(['auth'])->group(function () {
        Route::get('home', [HomeController::class, 'home'])->name('home');
        Route::get('shop', [HomeController::class, 'shop'])->name('shop');
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    });
});