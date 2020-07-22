@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mt-2">
        <div class="col">
            <a href="/manager">Volver -></a>
        </div>
    </div>

    <div class="row mt-3">

        <div class="col-md-6">
            <h2>Enviar mail individual</h2>

            <form action="" method="POST">
                @csrf
                <select name="usuario" id="usuario" class="custom-select custom-select-lg mb-3">
                    @foreach ($users as $u)
                        <option value="{{$u->email}}" >{{$u->name}}- id: {{$u->id}}</option>
                    @endforeach 
                </select>
                <input class="btn btn-success" type="submit" value="Enviar mail" >
            </form>
        </div>
    </div>



</div>


    
@endsection