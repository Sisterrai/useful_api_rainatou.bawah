<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //User registration
    public function register (Request $request){
       // return $request->all();
        $userInfo = $request->validate([
            "name" =>["required", "string", "min:3", "max:255"],
            "email" =>["required", "string", "unique:users,email", "max:255"],
            "password" =>["required", "string", "min:8", "max:30", "confirmed"],
        ]);

        $users = User::create([
            "name" => $userInfo["name"],
            "email" => $userInfo["email"],
            "password" => bcrypt($userInfo["password"]),
        ]);
        return response($users,201);
    }


    //User login
    public function login(Request $request){
         $userInfo = $request->validate([
            "email" =>["required", "string"],
            "password" =>["required", "string", "min:8", "max:30"],
        ]);

        $user = User::where("email", $userInfo['email'])->first();
        if(!$user) return response([
            "message" => "Cet utilisateur n'existe pas"
        ],401);
        if(!Hash::check($userInfo["password"], $user->password))
        return response([
            "message" => "Le mot de passe n'est pas correct"
        ],401);
        return $user;
    }
}
