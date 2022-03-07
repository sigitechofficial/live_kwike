<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function show_login(){
        return view('admin.pages.auth.login');
    }
    public function login_check(Request $request){
        $credentials  = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $user = User::where('email',$request->email)->first();
        Auth::attempt($credentials);

        if(Auth::check() && $user->hasRole('admin')){
            return redirect()->route('admin/home');
        }
        else{
            return redirect()->back()->with('error','User not found');
        }
    }
    public function show_forgot_password(){
        return view('admin.pages.auth.forget_password');
    }
    public function logout(){
        Auth::logout();
        if(!Auth::check()){
            return redirect()->route('admin/login');
        }
    }
}
