@extends('layouts.app')

@section('content')

<div class="container">
     @foreach ($cursos as $curso)
     <div class="card mt-2">
         <div class="card-header">
              <h2>{{$curso->titulo}}</h2>
         </div>
         <div class="card-body">
             <p>
                 {{$curso->descripcion}}
             </p>
         <span class="h5">Precio $ {{$curso->precio}}  </span> --  <a href="{{url('/cursos/'.$curso->id)}}" class="btn btn-primary">Mas Info...</a>
         </div>
     </div>
       
    @endforeach
</div>
   
@endsection