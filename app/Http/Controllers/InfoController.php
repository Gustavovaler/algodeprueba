<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
   public function index(Request $request)
   {
       return view('info');
   }
}
