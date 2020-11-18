@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/cursos_index.css')}}">

<img src="{{asset('img/cursos_portada.jpg')}}" alt="imagen de portada" class="portada">

<div class="container-custom">      

            @foreach ($cursos as $curso)
            <div class="curso">
            <a href="{{url('/cursos/'.$curso->id)}}" class="link-custom">
              <div class="card-custom">
                  <div class="img-container">
                    <img src="{{asset('/storage/app/'.$curso->imagen)}}" alt="{{$curso->imagen}}" class="img-custom">
                  </div>
                  <div class="info-container">
                       <div class="title-custom">
                            <b>{{$curso->titulo}}</b>
                        </div>
                        <div class="description-custom">
                            {{$curso->short_description}}
                        </div> 
                  </div>
              </div>
       
            {{-- 
                <div class="card-custom shadow-sm bg-dark p-2">
                    <div class="row">
                        <div class="col-md-3">
                       
                        </div>
                        <div class="col-md-7">
                       
                           
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
                </div>
            </a>
            </div> --}}
    </div>          
           @endforeach

        
    </div>
    

</div>
   
@endsection