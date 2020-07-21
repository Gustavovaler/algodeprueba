@extends('layouts.app')

@section('content')   
    <link rel="stylesheet" href="{{asset('css/manager.css')}}">    
    <script src="{{asset('js/mail.js')}}"></script>

    <div class="container">

    <div class="alert alert-primary mt-2" >Estas logeado como : {{$user[0]->name}}</div>
    <h1 class="title">Dashboard</h1>
        <hr>
    <div class="row">
        <div class="col-md-6 totales">
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
        <div class="col-md-6">
            <form action="/manager/send_mail" method="POST" id="form-mail">
                @csrf
            <select name="usuario" id="usuario" class="custom-select custom-select-lg mb-3">
                @foreach ($users as $u)
                    <option value="{{$u->email}}" >{{$u->name}}- id: {{$u->id}}</option>
                @endforeach 
            </select>
            <input class="btn btn-success" onclick="comfirm(event)" value="Enviar mail" >
        </form>
        </div>

    </div>
    {{-- --------------------------------------------------------------------------- --}}

    <div class="row">
        <div class="col-md-6">
          
        </div>
    </div>


    </div>

  

    
@endsection