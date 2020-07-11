@extends('layouts/app')

@section('content')

<div class="container">

    @foreach ($comments as $comment)
    {{$comment->id}}<br>
    {{$comment->comment_text}}
        
    @endforeach


</div>
    
@endsection