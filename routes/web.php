<?php
use Illuminate\Support\Facades\Route;

# ====================User Controllers
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ContactController;

# ====================Admin Controllers
use App\Http\Controllers\Admin\ProductListController;
use App\Http\Controllers\Admin\ProductCatController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\ProductDetailsController;
use App\Http\Controllers\Admin\NewController;
use App\Http\Controllers\Admin\CriteriaController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\OrderManagement;
use App\Http\Controllers\Admin\ThongKeController;

# ========================================User Routes
# ===============Auth
Route::group(['middleware' => ['web']], function () {
    Route::get('login',[AuthController::class,'login'])->name("user.login");
    Route::get('register',[AuthController::class,'register'])->name("user.register");
    Route::post('register',[AuthController::class,'registering'])->name("user.registering");

    Route::get('/auth/redirect/{provider}', function ($provider) {
    return Socialite::driver($provider)->redirect();
    })->name('auth.redirect');

    Route::get('/auth/callback/{provider}', [AuthController::class,'callback'])->name('auth.callback');
});

# ===============Liên hệ
Route::get('/send-mail',[ContactController::class,'index'])->name('send.email');
Route::post('/send-email',[ContactController::class,'sendEmail'])->name('send.email');

# ===============Home 
Route::get('/',[HomeController::class,'index'])->name("user.index");
Route::get('/shop', function () {
    return view('user.product.shop');
})->name('user.shop');

Route::get('/products', function () {
    return view('user.product.products');
})->name('user.products');

Route::get('/profile', function () {
    return view('user.profile.index');
})->name('user.profile');

# ===============Lấy sản phẩm nổi bât
Route::get('/laySanPhamNoiBat',[HomeController::class,'laySanPhamNoiBat'])->name("user.laySanPhamNoiBat");
Route::post('/laySanPhamNoiBat',[HomeController::class,'laySanPhamNoiBat'])->name("user.laySanPhamNoiBat");

# ===============Lấy popup sản phẩm chi tiết
Route::get('/popup-product',[HomeController::class,'popup_product'])->name("user.popup_product");
Route::post('/popup-product',[HomeController::class,'popup_product'])->name("user.popup_product");
Route::post('/popup_productDetails',[HomeController::class,'popup_productDetails'])->name("user.popup_productDetails");

# ===============Chi tiết sản phẩm
Route::get('/product-detail/{id}',[ProductDetailController::class,'index'])->name("user.product_detail");

# ===============Đơn hàng
Route::get('/order',[OrderController::class,'index'])->name("order.index");
Route::post('/order',[OrderController::class,'store'])->name("order.store");

# ===============Giỏ hàng
Route::get('/cart',[CartController::class,'index'])->name("checkout.cart");
Route::post('/cart',[CartController::class,'store'])->name("checkout.cart.store");

# ===============Thanh toán
Route::get('/payment',[PaymentController::class,'index'])->name("checkout.payment");

# ===============Cổng thanh toán
Route::post('/momo_payment',[PaymentController::class,'momo_payment'])->name("momo_payment");







# ========================================Admin Routes
Route::get('admin', function () {
    return view('admin.dashboard');
});
# ===============Thống Kê
Route::post('admin/filter-by-date',[ThongKeController::class,'filter_by_date'])->name("filter_by_date");
Route::post('admin/dashboard-filter',[ThongKeController::class,'dashboard_filter'])->name("dashboard_filter");

# ===============Quản lý đơn hàng
Route::get('admin/order',[OrderManagement::class,'index'])->name("ordermanagement.index");

Route::get('admin/order/edit/{order}',[OrderManagement::class,'edit'])->name("ordermanagement.edit");
Route::put('admin/order/edit/{order}',[OrderManagement::class,'update'])->name("ordermanagement.update");

/* Product List */
Route::get('admin/product-list',[ProductListController::class,'index'])->name("product_list.index");

Route::get('admin/product-list/create',[ProductListController::class,'create'])->name("product_list.create");
Route::post('admin/product-list/create',[ProductListController::class,'store'])->name("product_list.store");

Route::post('admin/product-list/storeFileUpload',[ProductListController::class,'storeFileUpload'])->name("product_list.storeFileUpload");

Route::delete('admin/product-list/destroy/{product_list}',[ProductListController::class,'destroy'])->name("product_list.destroy");

Route::get('admin/product-list/edit/{product_list}',[ProductListController::class,'edit'])->name("product_list.edit");
Route::put('admin/product-list/edit/{product_list}',[ProductListController::class,'update'])->name("product_list.update");
/* Lọc sản phẩm theo status: noibat, hienthi, noibat,hienthi */
Route::get('admin/product-list/locSanPhamTheoStatus/{status}',[ProductListController::class,'locSanPhamTheoStatus'])->name("product_list.locSanPhamTheoStatus");


/* Product Cat */
Route::get('admin/product-cat',[ProductCatController::class,'index'])->name("product_cat.index");

Route::get('admin/product-cat/create',[ProductCatController::class,'create'])->name("product_cat.create");
Route::post('admin/product-cat/create',[ProductCatController::class,'store'])->name("product_cat.store");

Route::post('admin/product-cat/storeFileUpload',[ProductCatController::class,'storeFileUpload'])->name("product_cat.storeFileUpload");

Route::delete('admin/product-cat/destroy/{product_cat}',[ProductCatController::class,'destroy'])->name("product_cat.destroy");

Route::get('admin/product-cat/edit/{product_cat}',[ProductCatController::class,'edit'])->name("product_cat.edit");
Route::put('admin/product-cat/edit/{product_cat}',[ProductCatController::class,'update'])->name("product_cat.update");

/* Lọc sản phẩm theo status: noibat, hienthi, noibat,hienthi */
Route::get('admin/products/locSanPhamTheoStatus/{status}',[ProductsController::class,'locSanPhamTheoStatus'])->name("product_list.locSanPhamTheoStatus");

/* Products */
Route::get('admin/products',[ProductsController::class,'index'])->name("product.index");

Route::get('admin/products/create',[ProductsController::class,'create'])->name("product.create");
Route::post('admin/products/create',[ProductsController::class,'store'])->name("product.store");

Route::get('admin/products/showuploadImages',[ProductsController::class,'showuploadImages'])->name("product.showuploadImages");

Route::post('admin/products/uploadImages',[ProductsController::class,'uploadImages'])->name("product.uploadImages");

Route::delete('admin/products/destroy/{products}',[ProductsController::class,'destroy'])->name("product.destroy");

Route::get('admin/products/edit/{products}',[ProductsController::class,'edit'])->name("product.edit");
Route::put('admin/products/edit/{products}',[ProductsController::class,'update'])->name("product.update");


/* ProductDetails */
Route::get('admin/product-details',[ProductDetailsController::class,'index'])->name("product_details.index");

Route::get('admin/product-details/create/{id}',[ProductDetailsController::class,'create'])->name("product_details.create");
Route::post('admin/product-details/create',[ProductDetailsController::class,'store'])->name("product_details.store");

Route::post('admin/product-details/storeFileUpload',[ProductDetailsController::class,'storeFileUpload'])->name("product_details.storeFileUpload");

Route::delete('admin/product-details/destroy/{product-details}',[ProductDetailsController::class,'destroy'])->name("product_details.destroy");

Route::get('admin/product-details/edit/{product-details}',[ProductDetailsController::class,'edit'])->name("product_details.edit");
Route::put('admin/product-details/edit/{product-details}',[ProductDetailsController::class,'update'])->name("product_details.update");


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

Route::delete('admin/slide/destroy/{slide}',[SlideController::class,'destroy'])->name("slide.destroy");
Route::get('admin//slide/edit/{slide}',[SlideController::class,'edit'])->name("slide.edit");
Route::put('admin/slide/edit/{slide}',[SlideController::class,'update'])->name("slide.update");

/* --------Video---------- */
Route::get('admin/video',[VideoController::class,'index'])->name("video.index");
Route::get('admin/video/create',[VideoController::class,'create'])->name("video.create");
Route::post('admin/video/create',[VideoController::class,'store'])->name("video.store");
Route::post('admin/video/storeFileUpload',[VideoController::class,'storeFileUpload'])->name("video.storeFileUpload");

Route::delete('admin/video/destroy/{video}',[VideoController::class,'destroy'])->name("video.destroy");
Route::get('admin//video/edit/{video}',[VideoController::class,'edit'])->name("video.edit");
Route::put('admin/video/edit/{video}',[VideoController::class,'update'])->name("video.update");