@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{asset('css/comun.css')}}">

<div class="container mt-4">

    <div class="seccion">
    <h3>Proximamente....</h3>
        <div class="parra">
    
            <p>Ya que esto nació ayer 9 de Julio de 2020 todavia hay mucho que planificar obviamente. El registro ya te asegura tu lugar en el grupo pero
                seguramente vamos a necesitar conocer mas de nuestros compañeros mas que nada sobre sus conocimientos. Tambien estaremos comunicando
                una firma de estar conectados que puede ser Discord o Slack o alguna otra plataforma gratuita que podamos gestionar.<b><i> Gracias por sumarte !!</i></b>
            </p>

        </div>
    </div>
    <div class="participar">
        <a href="/register" class="btn btn-primary">Quiero participar</a>
    </div>
  
</div
    
@endsection