<?php
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\ProductCatController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\BlogController;

Route::get('/auth/redirect/{provider}', function ($provider) {
    return Socialite::driver($provider)->redirect();
})->name('auth.redirect');

Route::get('/auth/callback/{provider}', function ($provider) {
    $user = Socialite::driver($provider)->user();
    dd($user);
})->name('auth.callback');

/*User routes*/

Route::get('/login', function () {
    return view('user.login');
})->name('user.login');


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
Route::get('admin/news/create',[NewController::class,'create'])->name("news.create");
Route::post('admin/news/create',[NewController::class,'store'])->name("news.store");
Route::post('admin/news/storeFileUpload',[NewController::class,'storeFileUpload'])->name("news.storeFileUpload");

Route::delete('admin/news/destroy/{news}',[NewController::class,'destroy'])->name("news.destroy");
Route::get('admin/news/edit/{news}',[NewController::class,'edit'])->name("news.edit");
Route::put('admin/news/edit/{news}',[NewController::class,'update'])->name("news.update");

/* -------Criteria---------- */
Route::get('admin/criteria',[CriteriaController::class,'index'])->name("criteria.index");
Route::get('admin/criteria/create',[CriteriaController::class,'create'])->name("criteria.create");
Route::post('admin/criteria/create',[CriteriaController::class,'store'])->name("criteria.store");
Route::post('admin/criteria/storeFileUpload',[CriteriaController::class,'storeFileUpload'])->name("criteria.storeFileUpload");

Route::delete('admin/criteria/destroy/{criteria}',[CriteriaController::class,'destroy'])->name("criteria.destroy");
Route::get('admin/criterias/edit/{criteria}',[CriteriaController::class,'edit'])->name("criteria.edit");
Route::put('admin/criteria/edit/{criteria}',[CriteriaController::class,'update'])->name("criteria.update");
/* BLogs */
Route::get('admin/blog',[BlogController::class,'index'])->name("blog.index");

Route::get('admin/blog/create',[BlogController::class,'create'])->name("blog.create");
Route::post('admin/blog/create',[BlogController::class,'store'])->name("blog.store");

Route::post('admin/blog/storeFileUpload',[BlogController::class,'storeFileUpload'])->name("blog.storeFileUpload");

Route::delete('admin/blog/destroy/{blog}',[BlogController::class,'destroy'])->name("blog.destroy");

Route::get('admin/blog/edit/{blog}',[BlogController::class,'edit'])->name("blog.edit");
Route::put('admin/blog/edit/{blog}',[BlogController::class,'update'])->name("blog.update");

/* -------Slide---------- */
Route::get('admin/slide',[SlideController::class,'index'])->name("slide.index");
Route::get('admin/slide/create',[SlideController::class,'create'])->name("slide.create");
Route::post('admin/slide/create',[SlideController::class,'store'])->name("slide.store");
Route::post('admin/slide/storeFileUpload',[SlideController::class,'storeFileUpload'])->name("slide.storeFileUpload");

Route::delete('admin/criteria/destroy/{criteria}',[CriteriaController::class,'destroy'])->name("criteria.destroy");
Route::get('admin/criterias/edit/{criteria}',[CriteriaController::class,'edit'])->name("criteria.edit");
Route::put('admin/criteria/edit/{criteria}',[CriteriaController::class,'update'])->name("criteria.update");
