<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class usercontroller extends Controller
{
    function login (Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
       // return $req->password;
        if(!$user || !Hash::check($req->password,$user->password))
        {
return "incorrect";
        }
        else{

            $req->session()->put('user',$user);
           return redirect ('/product');
        }
    }
}
