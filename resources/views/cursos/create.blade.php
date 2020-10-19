@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Crear curso</h3>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <form action="{{url('/cursos')}}" method="POST">
                    @csrf
                    <label for="titulo" class="" >Titulo</label><br>
                    <input type="text" class="form-control" name="titulo" required><br>
                    <label for="fecha_estreno">Fecha de estreno</label><br>
                    <input type="date" class="form-control" name="fecha_estreno" required><br>
                    <label for="precio">Precio</label><br>
                    <input type="number" class="form-control" name="precio" required min="0"><br>
                    <label for="descripcion">Descripción</label><br>
                    <textarea name="descripcion" id="" cols="30" rows="10" class="form-control" required></textarea> <br>
                    <input class="btn btn-primary" type="submit" value="Guardar">
                </form>


            </div>
        </div>

    </div>
    
@endsection