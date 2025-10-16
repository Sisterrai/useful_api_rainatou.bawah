<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
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
}
