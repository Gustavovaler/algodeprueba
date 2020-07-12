@extends('layouts.app')

@section('content')

    <div class="container">
        @foreach ($user_data as $user)
            <p>This is user {{ $user->name }}</p>
            <img src="{{asset('storage/img/avatar1.jpg')}}" alt="">

        @endforeach

        <form action="/developers/{{Auth::id()}}" method="POST"> 
            @csrf
            <label for="">Cambiar mi avatar</label>
            <input type="file" name= "avatar">
            <input type="submit" class="btn btn-primary">
        </form>




    </div>
    
    
@endsection