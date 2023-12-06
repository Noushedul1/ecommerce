<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Front\CartController;
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
// start admin
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
    Route::controller(UnitController::class)->prefix('unit')->name('unit.')->group(function(){
        Route::get('/index','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{unit:unit_slug}','edit')->name('edit');
        Route::put('/update/{unit:unit_slug}','update')->name('update');
        Route::delete('/destroy/{unit:unit_slug}','destroy')->name('destroy');
    });
    Route::controller(BrandController::class)->prefix('brand')->name('brand.')->group(function(){
        Route::get('/index','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{brand:brand_slug}','edit')->name('edit');
        Route::put('/update/{brand:brand_slug}','update')->name('update');
        Route::delete('/destroy/{brand:brand_slug}','destroy')->name('destroy');
    });
    Route::controller(ProductController::class)->prefix('product')->name('product.')->group(function(){
        Route::get('/index','index')->name('index');
        Route::get('/get-category-id/{id}','get_category_id')->name('get_category_id');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/show/{product:product_slug}','show')->name('show');
        Route::get('/edit/{product:product_slug}','edit')->name('edit');
        Route::post('/update/{product:product_slug}','update')->name('update');
        Route::delete('/destroy/{product:product_slug}','destroy')->name('destroy');
    });
});

require __DIR__.'/auth.php';
// end admin
// start front
Route::controller(FrontController::class)->group(function(){
    Route::get('/','index')->name('dashboard');
    Route::get('/contact_us','contactUs')->name('contact_us');
    Route::get('/product_details/{id}','productDetails')->name('product_details');
    Route::get('/category_page/{id}','categoryPage')->name('category_page');
    Route::get('/subcategory_page/{id}','subcategoryPage')->name('subcategory_page');
    Route::get('/get-product-info-for-modal','getProductInfo')->name('getProduct_Info');
});
Route::controller(CartController::class)->group(function(){
    Route::post('/add-to-cart','addToCart')->name('addTo_cart');
    Route::get('/cart-view','cartView')->name('cart_View');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/front_auth.php';
// end front
