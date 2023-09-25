<?php

use App\Http\Controllers\provider\category\ProviderCategoryController;
use App\Http\Controllers\provider\details\ProviderDetailController;
use App\Http\Controllers\UserManagement\users\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', 'login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'system'], function () {
    // user routes
    Route::get('/users', [UserController::class, 'index', 'middleware' => ['permission:academic-list']])->name('users.list');
    Route::post('/users/store', [UserController::class, 'store', 'middleware' => ['permission:academic_terms-save']])->name('users.save');
    Route::post('/users/update', [UserController::class, 'update', 'middleware' => ['permission:academic_terms-edit']])->name('users.edit');

    // provider routes

    Route::get('/provider', [ProviderDetailController::class, 'index'])->name('provider.list');
    Route::post('/provider/store', [ProviderDetailController::class, 'store'])->name('provider.save');
    Route::post('/provider_category/store', [ProviderCategoryController::class, 'store'])->name('provider_category.save');
    

});
