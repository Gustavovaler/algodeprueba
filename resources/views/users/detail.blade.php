@extends('layouts.app')

@section('content')
    @foreach ($user_data as $user)
        <p>This is user {{ $user->name }}</p>
    @endforeach
    
@endsection