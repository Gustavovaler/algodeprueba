@extends('layouts.app')

@section('content')   
    <link rel="stylesheet" href="{{asset('css/manager.css')}}">    

    <div class="container">
        <h1 class="title">Dashboard</h1>
        <hr>
    </div>
    <div class="container-custom">
{{-- -------------- PANEL IZQUIERDO ---------------------- --}}
    <div class="row">
        <div class="col-md-2 aside-left">
            <div class="ddw">
                <div class="btn-group dropright">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Cursos
                    </button>
                    <div class="dropdown-menu">
                      <a href="{{url('cursos/create')}}" class="dropdown-item">Nuevo Curso</a>
                    </div>
                  </div>
            </div>
            <div class="ddw">
                <div class="btn-group dropright">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Clasificados
                    </button>
                    <div class="dropdown-menu">
                      <a href="{{url('clasificados/create')}}" class="dropdown-item">Nuevo Clasificado</a>
                    </div>
                  </div>
            </div>
        </div>
        {{-- ------------ CURSOS ------------------------------------- --}}
        <div class="col-md-10 aside-center">
            <div class="row-mt-2">
                <div class="col-md-12 totales">
                    <h3 class="section-title">Cursos</h3>
                </div>
            </div>
            <hr>
           {{-- ---------------- STATS ---------------------------------- --}}
            <div class="row">
                <div class="col-md-4 totales">
                    <h3 class="title">Stats</h3>
                <table class="table table-borderer">
                    <tr>
                        <td>
                            Usuarios registrados :
                        </td>
                        <td>
                            {{count($users)}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Total mensajes :
                        </td>
                        <td>
                            {{count($comments)}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Total replicas :
                        </td>
                        <td>
                            {{count($child_comments)}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Total desafios :
                        </td>
                        <td>
                            {{count($desafios)}}
                        </td>
                    </tr>
                    
                </table>
                </div>
                {{-- ---------  ACCIONES ------------------------------------- --}}
                <div class="col-md-4">
                    <h3 class="title">Panel de acciones.</h3>          
                    <a  class="btn btn-success btn-block" href="/manager/mails" >Enviar mails </a>
                    <a  class="btn btn-primary btn-block" href="/manager/mails" >Nuevo recurso </a>
                    <a  class="btn btn-primary btn-block" href="/manager/create_challenge" >Nuevo desafío</a>
                    <a  class="btn btn-success btn-block" href="/manager/mails" >Casillas correo</a>
                </div>
        
            </div>
            <hr>
            {{-- --------------------------------------------------------------------------- --}}
            <h3 class="section-title">Usuarios</h3>
            <hr>
            <div class="row">
                
                <div class="col-md-4">
                    <h4 class="title">Usurios según género:</h4>
        
                    <table>
                        <tr>
                            <td><h5>Usuarios Varones:</h5></td> 
                            <td><h5>{{$generos[1]}}</h5></td>
                        </tr>
                        <tr>
                            <td><h5>Usuarios Mujeres:</h5></td> 
                            <td><h5>{{$generos[0]}}</h5></td>
                        </tr>
                        <tr>
                            <td><h5>Usuarios Otro:</h5></td> 
                            <td><h5>{{$generos[2]}}</h5></td>
                        </tr>
                      
                    </table>
                    <br><hr>
                    <h4 class="title">Usurios según edad:</h4>
        
                    <table>
                        <tr>
                            <td><h5>Usuarios +20  y -25:</h5></td> 
                            <td><h5>{{$edades[0]}}</h5></td>
                        </tr>
                        <tr>
                            <td><h5>Usuarios +25 y -30:</h5></td> 
                            <td><h5>{{$edades[1]}}</h5></td>
                        </tr>
                        <tr>
                            <td><h5>Usuarios +30 y -40:</h5></td> 
                            <td><h5>{{$edades[2]}}</h5></td>
                        </tr>
                        <tr>
                            <td><h5>Usuarios otras edades:</h5></td> 
                            <td><h5>{{$edades[3]}}</h5></td>
                        </tr>              
                    </table>          
                </div>
                <div class="col-md-4">
                    <h4 class="title">Usuarios verificados:</h4>
        
                    <table>
                        <tr>
                            <td><h5>Usuarios verificados:</h5></td> 
                            <td><h5>{{$verificados}}</h5></td>
                        </tr>
                        
                      
                    </table>
                </div>
            </div>
        </div>
    </div>

    </div>

    
    



  

    
@endsection