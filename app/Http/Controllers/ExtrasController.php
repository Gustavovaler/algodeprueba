<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtrasController extends Controller
{
    public function index(Request $request)
    {
        return view('extras');
    }
}
