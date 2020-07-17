@extends('layouts/app')

@section('content')

<link rel="stylesheet" href="{{asset('css/comun.css')}}">


<div class="container mt-4">

    @foreach ($comments as $comment)
    <div class="comment mt-2">
        <div class="col ">
            <div class="card sh">
                <div class="card-header">

                        @foreach ($users as $user)
                            @if ($user->id == $comment->user_id)
                                @if ($user->is_admin == 1)
                                    <span class="badge badge-success"> Admin</span>
                                @endif
                                @if ($user->is_moderator == 1)
                                    <span class="badge badge-warning"> Partner</span>
                                @endif

                           
                            Autor: <b><i>{{$user->name}} </i></b> . <span class="float-right"> {{date('d/m/Y - H:i ',strtotime($comment->created_at))}}</span>
                            @endif                            
                        @endforeach                    
                </div>
                <div class="card-body msg">
                
                <p class="card-text ">{{$comment->comment_text}}</p>
                
                </div>
                <div class="card-footer">
                  <span class="float-right m-1"><Likes :commentid = {{$comment->id}} :commentlikes={{$comment->likes}}></Likes></span><br>
                  @if (isset(Auth::user()->id))
                      <respmensaje :commentid = {{$comment->id}}  :userid = {{Auth::user()->id}}></respmensaje>
                  @else                 
                  <respmensaje :commentid = {{$comment->id}}  :userid = 0></respmensaje>
                  @endif
                  
                    
            </div>
        </div>
    </div>
    
        
    @endforeach

    <div class="agregar_comentario mt-5">

        @if (isset(Auth::user()->id))
        {{ $comments->links() }}
        <br>
            <form action="/comments" method="POST">
            @csrf
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="form-group ml-5">
                    
                    <textarea class="form-control"  name="comment_text" id="exampleFormControlTextarea1" rows="3"  placeholder="Deja tu comentario.." required></textarea>
                </div>
                
                <hr>
           
                <input type="submit" value="Comentar" class="btn btn-primary ml-5">
            </form>
            <br><br><br><br> 
        @else
            <form action="/comments" method="POST">
            @csrf
            <div class="form-group">
                    
                <textarea class="form-control"  name="comment_text" id="exampleFormControlTextarea1" rows="3"  placeholder="Debes loguear para comentar" disabled></textarea>
            </div>
                <hr>                
            </form>
            <br>
            {{ $comments->links() }}
            <br>
            <a href="/login" class="btn btn-primary float-right mb-5">Comentar</a>  
            <br><br><br><br>     
        @endif
    </div>
</div>
    
@endsection