@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/welcome.css')}}">
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<body> 
	<img src="{{asset('img/index_portada.jpg')}}" alt="Imagen de portada" class="img_portada">  

	
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="volanta">
						<h1 class="volanta-text">La industria IT esta en crecimiento  constante.</h1>
						<div class="separador">
							
						</div>
				</div>			
			</div>
		</div>
	{{-- //////////////////////////////////////////////////////////////////// --}}
	<hr>
<main>
	<div class="container">
		{{-- fila 2  --}}
		<div class="row mt-4">
			{{-- --------------------- --}}
			<div class="col-md-4">
				<article>
					<div class="card">
						<div class="card-body">
							<h5>Comunidad</h5>
							<p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Excepturi in, adipisci sit harum voluptate, sapiente asperiores 
							assumenda molestiae dolore atque architecto vitae,
							pariatur vero delectus aliquam! Commodi dolorem quidem provident.
							</p>
							<br>
							<img src="{{asset('img/bit7.png')}}" class="card-img">
						</div>
						
					</div>					
				</article>
			</div>
			{{-- --------------------- --}}
			<div class="col-md-4">
				<article>
					<div class="card">
						<div class="card-body">
							<h5>Aprendizaje</h5>
							<p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Excepturi in, adipisci sit harum voluptate, sapiente asperiores 
							assumenda molestiae dolore atque architecto vitae,
							pariatur vero delectus aliquam! Commodi dolorem quidem provident.
							</p>
							<br>
							<img src="{{asset('img/bit8.png')}}" class="card-img">
						</div>
					</div>					
				</article>
			</div>
			{{-- --------------------- --}}
			<div class="col-md-4">
				<article>
					<div class="card">
						<div class="card-body">
							<h5>Inserción</h5>
							<p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Excepturi in, adipisci sit harum voluptate, sapiente asperiores 
							assumenda molestiae dolore atque architecto vitae,
							pariatur vero delectus aliquam! Commodi dolorem quidem provident.
							</p>							
							<br>
							<img src="{{asset('img/bit9.png')}}" class="card-img">
						</div>
					</div>					
				</article>
			</div>
		
		</div>
			<hr>
			{{-- fila 3 --}}
			<div class="row mt-4">
				<div class="col-md-8">
					<img src="{{asset('img/bit3.png')}}" alt="foto de caracteristica" id="img-info-1">
				</div>
			
				<div class="col-md-4 p-2">
					<h4 id="copete1">Tres simples palabras</h4>
					<h2>Todos tus conocimientos valen</h2>
					<p>
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
					Est fugiat eius mollitia vitae voluptatum, velit, 
					nesciunt voluptatibus dignissimos nemo neque 
					hic sed iste nam eveniet totam rem harum suscipit molestias.
				</p>
				</div>
			</div>

		</div> {{--container--}}
		<img src="{{asset('img/olas.png')}}" alt="olas" id="ola1">	
		<div class="low-section">

		</div>
</main>	


</body>    


@endsection