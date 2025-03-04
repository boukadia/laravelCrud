<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Auth as AttributesAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userControllre extends Controller
{
    public function create(Request $request){
        
        $user=$request->validate(['name'=>"required",
        "email"=>'required|email',
        "password"=>'required|min:2']);
        User::create(["name"=>$request->name,
                    "email"=>$request->email,
                    "password"=>Hash::make($request["password"])
                ]);

    }
   public function formLogin(){
    return view("login");
   }
    public function login(Request $request){
        $user=$request->validate(["email"=>'required|email',
        "password"=>'required|min:2']);
        if(Auth::attempt($user)){
            return redirect("/dashboard");
        }
        

    }
    public function logOut(){
        Auth::logout();
        return redirect("/login");
    }
    public function show(){
        return view ("register");
    }
}
