@extends('layouts.app')

@section('content')
<!--  Estilos -->
<link rel="stylesheet" href="{{asset('css/desafios/index.css')}}">

<div class="container">
    <div class="row mt-5">
    @foreach ($desafios as $desafio)
        
        <div class="col-md-6">
            <div class="card p-4">
                <h4>{{$desafio->title}}</h4>

                <p>{!! $desafio->body_text !!}
                </p>
                <h3>Requisitos</h3>
                <ul>
                    <li>
                        {{$desafio->main_lang}}
                    </li>
                    <li>
                        {{$desafio->sec_lang}}
                    </li>
                    
                </ul>
                <div class="info">
                    <h5>Cupos disponibles:   {{$desafio->cupos}}</h5>
                    <h5>Cupos ocupados:  {{$desafio->cupos_llenos}}    </h5>
                </div>

                <h5 class="display-6">Nos manejamos por grupo de Whatsapp asi que sera necesario un telefono.</h5>
                <div>
                    <a href=" " class="btn btn-primary disabled" role="button" aria-disabled="true"> Participar </a>
                </div>

            </div>
        </div>
        
        @endforeach

      
            
        <div class="col-md-6">
            <div class="card p-4">
                <h4>Desafio E-commence</h4>
    
                <p>La idea es hacer un e-commerce de una empresa de venta de celulares.<br>
                        El diseño nos vamos a inspirar en https://apple.com <br>
                        El equipo es de 5 o 6  personas<br>
                        Tiempo estimado 4 semanas<br>
                        La finalidad es sumar una experiencia en equipo y que nos quede A TODOS el material para sumar a nuestro portfolio
                </p>
                <h3>Requisitos</h3>
                <ul>
                    <li>
                            Manejo basico de GIT
                    </li>
                    <li>
                            Algo de php
                    </li>
                    <li>
                            Algo de html y css
                    </li>
                    <li>
                            Algo de javascript
                    </li>
                    <li>
                            Deseable algo de Vuejs
                    </li>
                    <li>
                            Deseable algo de Laravel
                    </li>
                    </ul>
    
                    <h5 class="display-6">Nos manejamos por grupo de Whatsapp asi que sera necesario un telefono.</h5>
                    <div>
                        <a href=" " class="btn btn-primary disabled" role="button" aria-disabled="true"> Participar </a>
                    </div>
    
                </div>{{--card--}}
            </div>{{--col--}}
    </div> {{-- row --}}
    


</div>{{-- container --}}
    
@endsection