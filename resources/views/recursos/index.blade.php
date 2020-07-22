@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/recursos.css')}}">
<div class="container">
    <div class="row mt-3"> 
        <div class="col">
            <h1 class="title-color">Recursos</h1><hr>
            <h4 class="title-color mb-2">Herramientas y enlaces de utilidad para el desarrollo de software</h4>
        </div>
    </div>
    {{-- -------------------------------------------------------------------- --}}
    <div class="row mt-3">
       
        <div class="col-md-4">
            <div class="card border border-primary">
                <div class="card-header">                
                <h3>Paletas de colores para web.</h3>               
                </div>
                <img src="{{asset('img/colorhunt.jpg')}}" alt="" class="card-img-top">
                <div class="card-body">                                           
                    <div class="card-text">
                        <p>Hola, les quería compartir este sitio que está muy bueno para inspirarse cuando uno construye un 
                        sitio web: Siempre es dificil (al menos para mi jejej) hacer combinar los colores. En Color Hunt estan agrupados por 
                        paletas que aporta la comunidad y la verdad mas de una vez me salvaron. Saludos !!</p>
                </div>
                <div class=" text-right">
                    <a href="https://colorhunt.co/" class="btn btn-primary ">Visitar sitio</a>
                </div>
            </div>
            </div>
        </div>
    </div>
    {{-- -------------------------------------------------------------------- --}}
</div>
    
@endsection