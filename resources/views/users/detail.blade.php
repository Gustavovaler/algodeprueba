@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/perfil.css')}}">
{{-- 
    <div class="container mt-4">   
        <div class="row">
            <div class="col-md-3">
                 <img src="{{asset('storage/img/')}}/{{$perfil_data[0]->avatar}}" alt="">
            </div>
            <div class="col-md-6">
                 <h1 class="mt-3"> {{ $user_data[0]->name }}</h1>
            </div>
        </div> 
        <div class="row">
            <div class="col-md6">
                <form action="" method=""> 
                @csrf
                    <label for="">Cambiar mi avatar</label><br>
                    <input type="file" name= "avatar">
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
       --}}




    </div>
    <div class="container mt-2">

        <div class="row">
            <div class="col-md-12">
                <div class="banner-central">

                </div>
                <div class="avatar">
                    
                </div>
            </div>

        </div>
            
    </div>
           
    
    
@endsection