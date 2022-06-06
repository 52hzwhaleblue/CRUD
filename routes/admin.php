<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductListController;

Route::get('admin/product-list',[ProductListController::class,'index'])->name("admin.product_list");
