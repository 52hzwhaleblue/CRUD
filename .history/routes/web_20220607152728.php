<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\ProductCatController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\HomeController;


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

/*User routes*/
Route::get('/',[HomeController::class,'index'])->name("user.index");

// Route::get('/', function () {
// return view('user.index.index');
// })->name('user.index');

Route::get('/shop', function () {
return view('user.product.shop');
})->name('user.shop');

Route::get('/products', function () {
return view('user.product.products');
})->name('user.products');

Route::get('admin', function () {
return view('admin.dashboard');
});

/* Product List */
Route::get('admin/product-list',[ProductListController::class,'index'])->name("product_list.index");

Route::get('admin/product-list/create',[ProductListController::class,'create'])->name("product_list.create");
Route::post('admin/product-list/create',[ProductListController::class,'store'])->name("product_list.store");

Route::post('admin/product-list/storeFileUpload',[ProductListController::class,'storeFileUpload'])->name("product_list.storeFileUpload");

Route::delete('admin/product-list/destroy/{product_list}',[ProductListController::class,'destroy'])->name("product_list.destroy");

Route::get('admin/product-list/edit/{product_list}',[ProductListController::class,'edit'])->name("product_list.edit");
Route::put('admin/product-list/edit/{product_list}',[ProductListController::class,'update'])->name("product_list.update");


/* Product Cat */
Route::get('admin/product-cat',[ProductCatController::class,'index'])->name("product_cat.index");

Route::get('admin/product-cat/create',[ProductCatController::class,'create'])->name("product_cat.create");
Route::post('admin/product-cat/create',[ProductCatController::class,'store'])->name("product_cat.store");

Route::post('admin/product-cat/storeFileUpload',[ProductCatController::class,'storeFileUpload'])->name("product_cat.storeFileUpload");

Route::delete('admin/product-cat/destroy/{product_cat}',[ProductCatController::class,'destroy'])->name("product_cat.destroy");

Route::get('admin/product-cat/edit/{product_cat}',[ProductCatController::class,'edit'])->name("product_cat.edit");
Route::put('admin/product-cat/edit/{product_cat}',[ProductCatController::class,'update'])->name("product_cat.update");

/* -------News---------- */
Route::get('admin/news',[NewController::class,'index'])->name("news.index");
Route::get('admin/news/create',[NewController::class,'create'])->name("news.create")

