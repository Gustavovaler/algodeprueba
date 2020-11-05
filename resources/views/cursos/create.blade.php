@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Crear curso</h3>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <form action="{{url('/cursos')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="titulo" class="" >Titulo</label><br>
                    <input type="text" class="form-control" name="titulo" required><br>
                    <label for="fecha_estreno">Fecha de estreno</label><br>
                    <input type="date" class="form-control" name="fecha_estreno" required><br>
                    <label for="descripcion_corta">Descripcion corta</label><br>
                    <input type="text" class="form-control" name="descripcion_corta" required ><br>

                    <label for="autor">Autor</label><br>
                    <input type="text" class="form-control" name="autor" required ><br>

                    <label for="horas">Horas</label><br>
                    <input type="text" class="form-control" name="horas" required ><br>

                    <label for="clases">Clases</label><br>
                    <input type="number" class="form-control" name="clases" required min="0"><br>

                    <label for="precio">Precio</label><br>
                    <input type="number" class="form-control" name="precio" required min="0"><br>

                    <label for="imagen">Imagen del curso</label><br>
                    <input type="file" name="imagen" class="form-control"><br>

                    <label for="descripcion">Descripción</label><br>
                    <textarea name="descripcion" id="" cols="30" rows="10" class="form-control" required></textarea> <br>
                    <input class="btn btn-primary" type="submit" value="Guardar">
                </form>


            </div>
        </div>

    </div>
    
@endsection