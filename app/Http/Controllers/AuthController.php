<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request){
        if(!$request->email && !$request->password){
            return response(['message'=>'password and email is required']);
        }
        $user = User::where('email', $request->email)->first();

        if($user){
            if($user->password == $request->password){
                $access_token = $user->createToken('authToken')->plainTextToken;
                return response(['user' => $user, 'access_token'=>$access_token]);
            }
            
        }
         return response(['message' => 'user not found']);
    }
   
}
