@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Te registraste exitosamente !!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Conoce quienes estamos anotados <a href="/developers">aquí</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
