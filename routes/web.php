<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Order\OrderController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login/page', [AuthController::class, 'loginPage'])->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/switch-language/{locale}', [LanguageController::class, 'switchLanguage']);
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
        Route::get('/dasboard', [HomeController::class, 'dashboard'])->name('dashboard');
        Route::get('profile', [HomeController::class, 'profile'])->name('profile');
        Route::post('/admin/profile/update',[HomeController::class,'profileUpdate'])->name('profile.update');
        Route::resource('/users', UserController::class);
        Route::resource('/categories', CategoryController::class);    
        Route::resource('/products', ProductController::class); 
        Route::resource('/orders', OrderController::class);
    });
       
});
