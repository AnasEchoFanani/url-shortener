<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function registerForm(){
        if(auth()->check()){
            return redirect('/');
        }
        return view('register');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|max:100',
            'email' => 'required',
            'password' => 'required|min:6'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        auth()->login($user);
        return redirect('/');
    }

    public function loginForm(){
        if(auth()->check()){
            return redirect('/');
        }
        return view('login');
    }

    public function auth(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required|min:6'
        ]);
        if(auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])){
            return redirect('/');
        }else{
            return redirect()->route('login')->with([
                'error' => 'These credentials do not match any of our records!'
            ]);
        }
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }
}