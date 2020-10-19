@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/cursos_index.css')}}">

<div class="container">
     @foreach ($cursos as $curso)
     <div class="card mt-2">
         <div class="card-header">
              <h2>{{$curso->titulo}}</h2>
         </div>
         <div class="card-body">
            
             <h4>Fecha de estreno:  {{$curso->fecha_estreno}}</h4>

             @if ($curso->precio == 0)
             <h4 class="h5">Precio $  <b><u><i> GRATIS</i></u></b>  </h4> 
             @else
                 <h4 class="h5">Precio $ {{$curso->precio}}  </h4> 
             @endif

             <img src="{{asset('storage/'.$curso->imagen)}}" alt="{{$curso->imagen}}" class="imagen_curso">
                <br>
          <a href="{{url('/cursos/'.$curso->id)}}" class="btn btn-primary info" >Mas Info...</a>
         </div>
     </div>
       
    @endforeach
</div>
   
@endsection