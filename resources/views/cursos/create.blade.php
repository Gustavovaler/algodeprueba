@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Crear curso</h3>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <form action="{{url('/cursos')}}" method="POST">
                    @csrf
                    <label for="titulo" class="">Titulo</label><br>
                    <input type="text" class="form-control" name="titulo"><br>
                    <input class="btn btn-primary" type="submit" value="Guardar">
                </form>


            </div>
        </div>

    </div>
    
@endsection