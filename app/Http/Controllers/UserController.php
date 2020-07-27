<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Perfil;

class UserController extends Controller
{
    public function index(Request $request){

        $users = DB::table('users')->simplePaginate(20);

        return view('users.list',compact('users'));
    }

    public function show(Request $request)
    {
        if (null !== Auth::id()){
            $user_data = User::where('id',Auth::id())->get();
            $perfil_data = Perfil::where('user_id',Auth::id())->get();
            
            return view('users.detail', compact('user_data', 'perfil_data'));
        }

        return view('auth.login');
    }


    public function store_perfil(Request $request, $id)
    {
        return view('home');
    }

    public function verify_mail(Request $request, $id, $email)
    {
        $user = User::where('id', $id)->get();

        if ($user[0]->id == $id && $user[0]->email == $email) {
           $user[0]->email_verified_at = time();
           $user[0]->save();
           return redirect('/welcome');;
        }
        else{
            return redirect('/error');
        }
     
        
        

        
        
    }

}
