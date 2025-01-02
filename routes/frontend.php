<?php

use App\Http\Controllers\Frontend\Auth\LoginController;
use App\Http\Controllers\Frontend\Cart\CartController;
use App\Http\Controllers\Frontend\Home\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('login/page', [LoginController::class, 'loginPage'])->name('login');
Route::group(['prefix' => 'user', 'as' => 'user.'], function(){
    Route::get('/register/page', [LoginController::class, 'registerPage'])->name('register.page');
    Route::post('/regiser', [LoginController::class, 'register'])->name('register');
    Route::get('login/page', [LoginController::class, 'loginPage'])->name('login.page');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::middleware(['auth'])->group(function () {
        Route::get('home', [HomeController::class, 'home'])->name('home');
        Route::get('shop', [HomeController::class, 'shop'])->name('shop');
        Route::get('proceed-checkout', [HomeController::class, 'proceedCheckout'])->name('proceed.checkout');
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('faq', [HomeController::class, 'faq'])->name('faq');
        Route::post('/cart/add', [HomeController::class, 'addToCart'])->name('cart.add');
        Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show')->middleware('auth');
        Route::put('/cart/update/{cart}', [CartController::class, 'updateCart'])->name('cart.update');
        Route::delete('/cart/remove/{cart}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    });
});