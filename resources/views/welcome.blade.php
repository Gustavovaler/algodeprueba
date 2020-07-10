@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/welcome.css')}}">
<body>
<div class="img">
<img src="{{asset ('img/bannercentral.png')}}" alt="" width="100%" class="banner">
 </div> 

 <div class="container">

    <div class="row mt-4">
        <div class="col-md-4">
           <a href="/info" class="btn btn-secondary btn-block rounded">De que se trata</a>
        </div>
        <div class="col-md-4">
            <a href="/register" class="btn btn-primary btn-block rounded">Registrarme</a>
         </div>
         <div class="col-md-4">
            <a href="/extras" class="btn btn-secondary btn-block rounded">Que mas debo saber</a>
         </div>
        

       
    </div>


 </div>
 
 

</body>

     


@endsection