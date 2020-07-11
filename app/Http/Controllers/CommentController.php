<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comments;

class CommentController extends Controller
{
    public function index(Request $request)
    {

        $comments = comments::all();

        return view('comments.list', compact('comments'));
    }



    public function store(Request $request)
}
