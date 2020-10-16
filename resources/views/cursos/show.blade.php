@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <h2>{{$curso->titulo}}</h2>
                <p>{{$curso->descripcion}}</p>
                <br>
                <h3>Precio ars$  {{$curso->precio}}.</h3>
                <a href="" class="btn btn-primary">Comprar</a>
                
            </div>
        </div>
        <br>
        <hr>
        <a href="{{url('/cursos')}}">Volver al listado ></a>
    </div>
@endsection