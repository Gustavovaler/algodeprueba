<?php

namespace App\Http\Controllers;

use App\ChildComment;
use App\User;
use Illuminate\Http\Request;

class ChildRespController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {   
        
        $child_list = ChildComment::where('parent_id', $id)->get();
        foreach ($child_list as $reg) {
            $user = User::where('id', $reg->user_id)->get();
            $reg->user_id = $user[0]->name;   
        }  
       
        return response()->json($child_list);        
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $childcomment = new ChildComment();
        $childcomment->comment_text = $request->input('comment_text');
        $childcomment->user_id = $request->input('user_id');
        $childcomment->parent_id = $request->input('parent_id');
        $childcomment->active = 1;
        $childcomment->likes = 0;
        $childcomment->save();
        return $childcomment;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ChildComments  $childComments
     * @return \Illuminate\Http\Response
     */
    public function show(ChildComments $childComments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChildComments  $childComments
     * @return \Illuminate\Http\Response
     */
    public function edit(ChildComments $childComments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChildComments  $childComments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChildComments $childComments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChildComments  $childComments
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChildComments $childComments)
    {
        //
    }
}
