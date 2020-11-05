@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/cursos_index.css')}}">

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
                <div class="card-custom">
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
            {{-- <div class="card mt-2">
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
       
                    <img src="{{asset('/storage/app/'.$curso->imagen)}}" alt="{{$curso->imagen}}" class="imagen_curso">
                       <br>
                 <a href="{{url('/cursos/'.$curso->id)}}" class="btn btn-primary info" >Mas Info...</a>
                </div>
            </div> --}}
              
           @endforeach

        </div>
    </div>
    

</div>
   
@endsection