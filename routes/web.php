<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\SubCategoryController;

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
// start front
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function(){
    Route::controller(AdminController::class)->group(function(){
        Route::get('/dashboard','index')->name('dashboard');
    });
    Route::controller(CategoryController::class)->prefix('category')->name('category.')->group(function(){
        Route::get('/index','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{category:category_slug}','edit')->name('edit');
        Route::put('/update/{category:category_slug}','update')->name('update');
        Route::delete('/destroy/{category:category_slug}','destroy')->name('destroy');
    });
    Route::controller(SubCategoryController::class)->prefix('subcategory')->name('subcategory.')->group(function(){
        Route::get('/index','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{subcategory:subcategory_slug}','edit')->name('edit');
        Route::put('/update/{subcategory:subcategory_slug}','update')->name('update');
        Route::delete('/destroy/{subcategory:subcategory_slug}','destroy')->name('destroy');
    });
});

require __DIR__.'/auth.php';
// end front
// start backend
Route::controller(FrontController::class)->group(function(){
    Route::get('/','index')->name('dashboard');
    Route::get('/contact_us','contactUs')->name('contact_us');
    Route::get('/product_details','productDetails')->name('product_details');
    Route::get('/category_page','categoryPage')->name('category_page');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/front_auth.php';
// end backend
