<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comments;
use App\User;

class CommentController extends Controller
{
    public function index(Request $request)
    {

        $comments = comments::all();
        $users = User::all();

        return view('comments.list', compact('comments', 'users'));
    }



    public function store(Request $request)
    {
        $comment = new comments();
        $comment->comment_text = $request->input('comment_text');
        $comment->user_id = $request->input('user_id');
        $comment->save();
        $comments = comments::all();
        $users = User::all();
        
        return view('comments.list', compact('comments', 'users'));
    }
}
