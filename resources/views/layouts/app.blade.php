<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.tiny.cloud/1/i686foxm5qcvrxu6fdxa4lwgy1mtsusozck547w8z65z4eaa/tinymce/5/tinymce.min.js"
     referrerpolicy="origin"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html{
            font-family: 'Roboto Slab', serif;
            font-size: 16px;
        }
        body{
            background-color: #2a2d32;
            font-family: 'Roboto Slab', serif;
            font-size: 16px;
        }
        .navbar-dark{
            background-color: #18191c !important;
            font-family: 'Heebo', sans-serif;
        }
        h1, h2, h3, h4, h5, h6,p,div{
            color: aliceblue !important;
            font-family: 'Roboto Slab', serif;
        }
        .font-heebo{
            font-family: 'Heebo', sans-serif;
        }
        .alert-secondary{
            background-color: rgb(252, 63, 63);
            
        }
        
    </style>
</head>
<body>

    <div id="app">
        <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark  ">
              <a class="navbar-brand ml-5" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}                     
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="container">
              
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                      
                    <ul class="navbar-nav bg-dark navbar-dark mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active " href="{{url('/')}}">
                              Home
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link active alinker" href="/developers">Developers</a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link active" href="/info">Info</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('/cursos')}}">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('/comments')}}">Comunidad</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('/recursos')}}">Recursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('/desafios')}}">Desafios</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a id="clasificadosdropdown" class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               <span class="caret"></span> Clasificados
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="{{url('/clasificados')}}" class="dropdown-item">Ofrecidos</a>
                                <a class="dropdown-item" href=""> Pedidos </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('/donate')}}">Donar</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link active font-heebo" href="{{ route('login') }}">Loguear</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link active font-heebo" href="{{ route('register') }}">Registrarse</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <span class="caret"></span> <img src="{{asset('img/user.png')}}" alt="" width="30px" style="margin-right:3px;"> {{ Auth::user()->name }} 
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="{{url('/perfil')}}" class="dropdown-item">Mi perfil</a>
                                     <hr>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       Salir
                                    </a>
                                   
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @if (Auth::user() != null)
            @if (Auth::user()->is_admin == true)
              <div class="container">
                <div class="alert alert-secondary" role="alert">
                    Estas logueado como administrador. User: <b>{{Auth::user()->name}}</b>
                </div>
            </div>  
            @endif
            
        @endif
        
       
            @yield('content')
       
    </div>

