@extends('layouts.app')

@section('content')
<div class="container mt-4">


    <h1>Quienes Somos Hasta Ahora !</h1>
    <br>

 <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Edad</th>
            <th scope="col">Pais</th>
          </tr>
        </thead>

        <tbody>
    
        @foreach ($users as $user)
    
        <tr>
            <th scope="row">{{$user->id }}</th>
            <td>{{ ucfirst($user->name) }}</td>
            <td>{{ $user->edad }}</td>
            <td>{{ ucfirst($user->pais) }}</td>
        </tr>
    @endforeach        
        
        </tbody>
      </table>

      {{ $users->links() }}
</div>    
@endsection