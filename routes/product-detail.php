<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductDetailController;


Route::get('/product-detail/{id}',[ProductDetailController::class,'index'])->name("user.product_detail");
