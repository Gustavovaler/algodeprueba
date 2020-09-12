@extends('layouts.app')

@section('content')
<div class="container mt-3">


    <h1 class="display-6 ml-5">Quienes Somos Hasta Ahora !</h1>
    <br>
<div class="row">
  <div class="col-md-8 offset-1" >

 
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
            @if (Auth::user() != null)
                 @if (Auth::user()->is_admin == 1)
                <td>{{ date($user->created_at)}}</td>
                @endif
            @endif
           
          
        </tr>
    @endforeach        
        
        </tbody>
      </table>

    </div>
  </div>
  
      {{ $users->links() }}
</div>    
@endsection