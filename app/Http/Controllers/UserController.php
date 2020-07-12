<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function index(Request $request){

        $users = User::all();

        return view('users.list',compact('users'));
    }

    public function show(Request $request, $id)
    {
        return $id;
    }

    public function self_show(Request $request, $id)
    {
        if (Auth::id() == $id ) {
            $user_data = User::where('id',$id)->get();
            
            return view('users.detail', compact('user_data'));
        }
        return "false";
       
    }

}
