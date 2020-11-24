@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{asset('css/cursos_index.css')}}">
<script src="{{asset('js/js/all.js')}}" defer></script>

<img src="{{asset('img/cursos_portada.jpg')}}" alt="imagen de portada" class="portada">


<section class="Cursoswrap">
    <h1>LISTADO DE CURSOS </h1>
    <div class="alert alertCurso" role="alert">
       <span><i class="fas fa-exclamation-circle"></i></span> ¿No lo tienes claro? Todos los cursos tienen una garantía de reembolso de 30 días
      </div>
<div class="cursowrapp-a">
           <!--MENU LATERAL-->
              <div class="menuLista">
                  <ul>
                      <li>Tema<span><i class="fas fa-chevron-down"></i></span></li>
                      <li>Subcategoría<span><i class="fas fa-chevron-down"></i></span></li>
                      <li>Nivel<span><i class="fas fa-chevron-down"></i></span></li>
                      <li>Idioma<span><i class="fas fa-chevron-down"></i></span></li>
                      <li>Características<span><i class="fas fa-chevron-down"></i></span></li>
                  </ul>
              </div>
   
     <div class="cardList">
          <!--TARJETA-->
          @foreach ($cursos as $curso)
     <a href="{{url('/cursos/'.$curso->id)}}"> 
            <div class="cardDetail">
                  <div class="imagenCurso">
                     <img src="{{asset('/storage/app/'.$curso->imagen)}}" alt="">      
                  </div>
                
                <div class="detailsWrapper">
                      <div class="cursosInfo">
                           <h2>{{$curso->titulo}}</h2>
                           <p class="primerhijo">{{$curso->short_description}}</p>
                           <p>Horas {{$curso->horas}} * Clases {{$curso->clases}} * Nivel: Todos</p>
                           <p>{{$curso->author}}</p>
                      </div>
    
                    <div class="cursosPrecio">
                        @if ($curso->precio != 0)
                            <h3 class="price"><span class="currency">$ </span>{{$curso->precio}}</h3>
                        @else 
                        <h3 class="price"><u>Gratis !!</u></h3>
                        @endif
                        
                    </div>
                </div>
            </div>
       </a>
          @endforeach

     </div>
    
</div>    <!--WRAPP-A -->

</section>

<br>
<br>
<br>
<br>




@endsection