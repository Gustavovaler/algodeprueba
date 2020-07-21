<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use App\User;
use App\comments;
use App\ChildComment;
use App\Desafio;
use App\Mail\WelcomeMail;


class ManagerController extends Controller
{
    public function index(Request $request)
    {
        $user = User::where('id',Auth::id())->get();
        if ($user[0]->is_admin == 1) {

            $users = User::all();
            $comments = comments::all();
            $child_comments = ChildComment::all();
            $desafios = Desafio::all();


           return view('manager.index', compact('user', 'users', 'comments', 'child_comments','desafios'));
        }
        return "forbidden";
    
       
    }

    public function send_mail(Request $request)
    {
        $user_mail = $request->input('usuario');
        //Mail::to($user_mail)->send(new WelcomeMail());
        return redirect('/manager');
    }
}
