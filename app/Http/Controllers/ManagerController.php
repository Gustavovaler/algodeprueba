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
            $mujeres = count(User::where('genero', 'Femenino')->get());
            $varones = count(User::where('genero', 'Masculino')->get());
            $otro = count(User::where('genero', 'Otro')->get());
            $verificados = count($users) - count(User::where('email_verified_at', null)->get());
            $mas20=0;
            $mas25 = 0;
            $mas30=0;         
            foreach ($users as $u) {
                if ($u->edad >= 30 && $u->edad <= 40) {
                    $mas30 ++;
                }
                if ($u->edad >= 25 && $u->edad <30) {
                    $mas25 ++;
                }
               if ($u->edad < 25 && $u->edad >= 20) {
                   $mas20 ++;
               }
            }
            $otros= count($users)-$mas20-$mas25-$mas30;
            $edades = [$mas20, $mas25, $mas30, $otros];
            $generos = [$mujeres, $varones, $otro];
            
           
           return view('manager.index', compact('user', 'users', 'comments', 'child_comments','desafios', 'generos', 'edades', 'verificados'));
        }
        return "forbidden";
    
       
    }

    public function mails(Request $request)
    {
        $users = User::all();
        
        return view('manager.mails', compact('users'));
    }

    public function send_mail(Request $request)
    {
        $user_mail = $request->input('usuario');
        $user_id = User::where('email', $user_mail)->get();
        Mail::to($user_mail)->send(new WelcomeMail($user_id));

        return redirect('/manager');

    }

    public function create_challenge(){
        return view('manager.desafios_create');
    }
}
