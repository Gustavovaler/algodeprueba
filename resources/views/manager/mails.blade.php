@extends('layouts.app')

@section('content')
<script src="{{asset('js/mail.js')}}"></script>

<div class="container">
    <div class="row mt-2">
        <div class="col">
            <a href="/manager">Volver -></a>
        </div>
    </div>

    <div class="row mt-3">

        <div class="col-md-6">
            <h2>Enviar mail individual</h2>

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



</div>


    
@endsection