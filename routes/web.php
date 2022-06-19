<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'index'])->name("user.index");

# Lấy sản phẩm nổi bật
Route::get('/laySanPhamNoiBat',[HomeController::class,'laySanPhamNoiBat'])->name("user.laySanPhamNoiBat");

Route::post('/laySanPhamNoiBat',[HomeController::class,'laySanPhamNoiBat'])->name("user.laySanPhamNoiBat");


Route::get('/shop', function () {
    return view('user.product.shop');
})->name('user.shop');

Route::get('/products', function () {
    return view('user.product.products');
})->name('user.products');

Route::get('/profile', function () {
    return view('user.profile.index');
})->name('user.profile');


