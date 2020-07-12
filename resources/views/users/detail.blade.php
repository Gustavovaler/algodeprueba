@extends('layouts.app')

@section('content')

    <div class="container">
        @foreach ($user_data as $user)
            <p>This is user {{ $user->name }}</p>
            <img src="{{asset('storage/img/avatar1.jpg')}}" alt="">
        @endforeach




    </div>
    
    
@endsection