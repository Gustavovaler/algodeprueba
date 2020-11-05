@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/cursos_index.css')}}">

<img src="{{asset('img/cursos_portada.jpg')}}" alt="imagen de portada" class="portada">

<div class="container-custom">

    <div class="row">
        <div class="col-md-3">
            <hr>
            <div class="card">

            </div>
        </div>
        <div class="col-md-9">

            @foreach ($cursos as $curso)
            <hr>
            <a href="{{url('/cursos/'.$curso->id)}}" class="link-custom">
                <div class="card-custom shadow-sm bg-dark p-2">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{asset('/storage/app/'.$curso->imagen)}}" alt="{{$curso->imagen}}" class="img-custom">
                    </div>
                    <div class="col-md-7">
                        <div class="title-custom">
                            <b>{{$curso->titulo}}</b>
                        </div>
                        <div class="description-custom">
                            {{$curso->short_description}}
                        </div>    
                        <div class="author">
                            {{$curso->author}}
                        </div>  
                        <div class="stars">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </div>  
                        <div class="detalle-horas">
                            {{$curso->horas}} horas de material - {{$curso->clases}} clases
                        </div>                
                    </div>
                    <div class="col-md-2">
                        <div class="title-custom">
                            @if ($curso->precio == 0)
                            <b>Precio $ <u><i> GRATIS</i></u></b>  </h4> 
                            @else
                                <b>Precio $ {{$curso->precio}}  </b> 
                            @endif
                        </div>
                        
                    </div>
                </div></a>
            </div>
              
           @endforeach

        </div>
    </div>
    

</div>
   
@endsection