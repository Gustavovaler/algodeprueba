<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comments;
use App\User;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        $comments = DB::table('comments')->orderBy('created_at', 'desc')->simplePaginate(10);
        $users = User::all();

        return view('comments.list', compact('comments', 'users'));
    }



    public function store(Request $request)
    {
        $comment = new comments();
        $comment->comment_text = $request->input('comment_text');
        $comment->user_id = $request->input('user_id');
        $comment->save();        
        return redirect('/comments');
    }

    public function update_like(Request $request, $id)
    {
        $comment = comments::find($id);
        $coment_like = $comment->likes;
        $comment->likes = $coment_like +1;
        $comment->save();
        
    }
}
