<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ManagerController extends Controller
{
    public function index(Request $request, $id)
    {
        $user = User::where('id',$id)->get();

        return view('manager.index', compact('user'));
    }
}
