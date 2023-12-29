<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $req){
        $user = User::where('email',$req->email)->first();
        if($user){
            if($user->password == $req->password){
                Auth::login($user);
                return redirect('/admin')->with('berhasilLogin',true);
            }else{
            return back()->with('emptyPassword', true);
            }
        }else{
            return back()->with('emptyEmail', true);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
