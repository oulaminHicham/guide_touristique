<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email'=>['required' , 'email'] ,
            'password'=>['string' , 'min:8']
        ]);
        $credentials = $request->all();
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            return response(compact('user'));
        }else{
            return response(['message'=>'email ou password incorect'] , 422);
        }
        /*
        test api object
        {
            "email":"ahmed@gmail.com" ,
            "password":"12345678"
        }
        */
    }
    public function logout(){
        Auth::logout();
        return response('', 204);
    }
}
