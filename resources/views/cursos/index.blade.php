@extends('layouts.app')

@section('content')

<div class="container">
     @foreach ($cursos as $curso)
        <h2>{{$curso->titulo}}</h2>
    @endforeach
</div>
   
@endsection