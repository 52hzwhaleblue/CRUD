<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::group(['middleware' => ['web']], function () {
    Route::get('login',[AuthController::class,'login'])->name("user.login");
    Route::get('register',[AuthController::class,'register'])->name("user.register");
    Route::post('registering',[AuthController::class,'registering'])->name("user.registering");

    Route::get('/auth/redirect/{provider}', function ($provider) {
    return Socialite::driver($provider)->redirect();
    })->name('auth.redirect');

    Route::get('/auth/callback/{provider}', [AuthController::class,'callback'])->name('auth.callback');
});

