<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;

use App\Models\User;



class UserController extends Controller
{
    use AuthenticatesUsers;
    // protected $redirectTo = "/";

    public function login_view(){
        return view('user.auth.login');
    }

    public function register_view(){
        return view('user.auth.register');
    }

    public function login(Request $request)
    {
      
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])){
            $userSession = DB::table('users')->where('email',$request->email)->get();
            foreach($userSession as $item){
                Session::put('userSession',$item);
            }
            return redirect()->route('user.index');
        }
                    return back()->withInput($request->only('email', 'remember'));


    }
}
