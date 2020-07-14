@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Te registraste exitosamente !!</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Conoce quienes estamos anotados <a href="/developers">aquí</a><br>
                    Dejanos una sugerencia o un saludito en  <a href="/comments">Mensajes</a> <br>
                    Podes ver tu <a href="">perfil</a> y modificar tus datos.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
