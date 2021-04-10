@extends('layouts.app')

@section('content')
<!-- Estilos -->
<link rel="stylesheet" href="{{asset('css/comunidad/show.css')}}">
    <div class="container">
        <a href="{{url('/cursos')}}">Volver al listado ></a>
        <div class="row mt-5">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <!-- Titulo -->
                        <h2>{{$curso->titulo}}</h2>
                    </div>
                    <!-- cuerpo de la tarjeta -->
                    <div class="card-body">
                        <img src="{{asset('/storage/app/'.$curso->imagen)}}" alt="Imagen del curso" class="image">
                        <p class="descripcion">{{$curso->descripcion}}</p>
                        <hr>
                        <label for="">
                            Fecha de estreno:
                        </label>
                        <h4 class=""> {{$curso->fecha_estreno}}</h4>
                        <label for="">
                            Autor: 
                        </label>
                        <h4>{{$autor->name}}</h4>
                        @if ($curso->precio == 0)
                        <h3 class="text-right"> Gratis </h3>
                        @else 
                        <h3 class="text-right">Precio ars$  {{$curso->precio}}.</h3>
                        @endif                        
                        <a href="" class="btn btn-warning btn-block">Comprar</a>
                    </div>
                </div>
            </div>
        </div>



    
        <br>
        <hr>
       
    </div>
@endsection