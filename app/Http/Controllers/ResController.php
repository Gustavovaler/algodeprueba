<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResController extends Controller
{
    public function index(Request $request)
    {
        return view('recursos.index');
    }
}
