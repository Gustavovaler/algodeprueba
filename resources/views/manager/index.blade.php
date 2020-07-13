@extends('layouts.app')

@section('content')
    @foreach ($user as $u)

    @if ($u->is_admin == 1 && $u->id == Auth::id())

    is admin
        
    @else
        forbidden {{Auth::id()}}
    @endif
        
    @endforeach
@endsection