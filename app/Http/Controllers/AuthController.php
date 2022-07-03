<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{


    public function registering(Request $request){

        $password = Hash::make($request->get('password'));
        if(Auth::check()){
            $request->validate([
                'password' => 'required|min:5|max:12',
            ]);
            User::where('id', auth()->user()->id)
                ->update([
                    'password' => $password,
                ]);
        }
        else{
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:5|max:12',
            ]);

            $user = User::create([
                'name' => $request->get('name'),
                'password' => $password,
                'email' => $request->get('email'),
            ]);

            Auth::login($user);
        }
        // return redirect()->route('user.product_detail', ['id' => 6]);
        return redirect()->route('user.index');
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

        return redirect()->route('user.register');
    }
}
