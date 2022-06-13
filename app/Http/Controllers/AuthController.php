<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        return view('user.auth.login');
    }

    public function register(){
        return view('user.auth.register');
    }

    public function callback($provider){
        $data = Socialite::driver($provider)->user();

        $data = User::firstOrCreate([
            'email' => $data->getEmail(),
        ], 
        [
            'email' => $data->getEmail(),
            'name' => $data->getName(),
            'avatar' => $data->getAvatar(),
        ]);

        Auth::login($data);

        return redirect()->route('user.login');
    }
}
