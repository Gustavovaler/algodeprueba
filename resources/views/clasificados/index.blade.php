@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/clasificados_index.css')}}">


<div class="container">
    <div class="row main-section">

        <div class="col-md-3  mt-5 " >
            {{-- *************IZQUIERDA************************************ --}}
                <div class="row section-left">
                    <h2>Algo dew </h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, iste. Non animi debitis, 
                        ad accusamus dignissimos voluptas eveniet nisi, quidem dicta totam sequi recusandae deleniti
                         esse explicabo! At, quia non
                    </p>
                    <br>
                
                    <h2>Algo dew </h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, iste. Non animi debitis, 
                        ad accusamus dignissimos voluptas eveniet nisi, quidem dicta totam sequi recusandae deleniti
                         esse explicabo! At, quia non
                    </p>
                </div>
        </div>

        <div class="col-md-9 section-right mt-5">
            {{-- ***************DERCHA********************************** --}}
            
            <div class="card">
                <div class="card-header bg-primary">
                     <div class="car-title">
                    <h4>Tarjeta de aviso </h4>
                </div>
                </div>               
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Ullam, nostrum voluptates consequuntur facilis at deserunt doloribus? 
                        Perspiciatis expedita vero tenetur provident! Sed, illum. Officiis corporis, 
                        quas asperiores repellat iste possimus.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-primary">
                     <div class="car-title">
                    <h4>Tarjeta de aviso</h4>
                </div>
                </div>               
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Ullam, nostrum voluptates consequuntur facilis at deserunt doloribus? 
                        Perspiciatis expedita vero tenetur provident! Sed, illum. Officiis corporis, 
                        quas asperiores repellat iste possimus.</p>
                </div>
            </div>
            


        </div>


    </div>




</div>
    
@endsection