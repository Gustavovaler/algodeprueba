@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/welcome.css')}}">
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<body>

   
	<div class="row">
		
		<div class="col-md-8  offset-md-2 text-center mt-5 bg-gray">
			<h1 class="title-header">Formate y encontrá trabajo </h1>
			
			<p class="copete">
				En nuestra web podrás practicar y demostrar tus habilidades porgramáticas con desafíos para todos los niveles.
			</p>
			<div class="central-control">
				<a href="/register" class="btn btn-primary ">Registrarme</a>
			</div>
			<div class="comanda ">
				<p>Echale un ojo a los <a href="">desafíos !</a></p>
			</div>
			<div class="img-central">
				<img src="{{asset('img/foto1.png')}}" alt="" class="mb-5">
			</div>
			<div class="sep bg-light m-0">
			<img src="{{asset('img/olas.pn')}}g" alt="" class="olas">
		</div>
		</div>

		
	<div class="container">
		<div class="row text-center">
			<div class="col-md-4 text-center ">
				<div class="img-card">
					<img src="{{asset('img/a.png')}}" alt="" class="a">
				</div>
			</div>
			<div class="col-md-4 text-center ">
				<div class="img-card">
					<img src="{{asset('img/b.png')}}" alt="" class="b">
				</div>
			</div>
			<div class="col-md-4 text-center ">
				<div class="img-card">
					<img src="{{asset('img/c.png')}}" alt="" class="c">
				</div>
			</div>
		</div>

		<div class="row text-center">
			<div class="col-md-4 text-center mt-2">	
			<div class="title-image">
				Suma conocimientos con pruebas rápidas
			</div>				
				<p class="info-p">Los ejercicios propuestos tienen la  función de entrenarte
					en diversas areas de la programación.
			</div>
			<div class="col-md-4 text-center mt-2">
				<div class="title-image">
					Progresa en tu puntuación y sube de nivel
				</div>
				<p class="info-p">Cada ejercicio, prueba o desafío que completas
				otorga puntos para subir tu nivel.</p>
			</div>
			<div class="col-md-4 text-center mt-2">
				<div class="title-image">
					Serás visible para reclutadores y empresas IT
				</div>
				<p class="info-p">Los mejores de cada nivel reciben propuestas para entrevistas laborales
				, pasantías y experiencias en ambiente productivo.</p>
			</div>
		</div>
<!-- -------------------------------------------------------------------------------- -->
		<div class="row mt-5">
			<div class="col-md-8">
				<div class="section2-left">
					<img src="{{asset('img/bit2.png')}}" alt="">
				</div>
			</div>

			<div class="col-md-4">
				<div class="section2-right">
					<div class="sub-title-right ">
						VENTAJAS DE PERTENECER
					</div>
					<div class="title-right">
						No estás solo, hay una comunidad  para ayudarte
					</div>
					<div class="text-sec-r">
						<p class="info-p">
							La ventaja del trabajo comunitario es fortalecer
							la seguridad durante el aprendizaje sabiendo que
							siempre hay alguien dispuesto a echarte una mano.
						</p>
					</div>					
				</div>
			</div>
		</div>
<!-- ------------------------------------------------------------------------------------------- -->
		
		<div class="row mt-5">
			
			<div class="col-md-4">
				<div class="section2-right">
					<div class="sub-title-right ">
						TRABAJO EN EQUIPO
					</div>
					<div class="title-right">
						Participa de actividades similar a producción
					</div>
					<div class="text-sec-r">
						<p class="info-p">
							Pensado principalmente para colectar experiencia en un ambiente
							productivo similar al que encontrarás cuando estés trabajando, esto te dará la experiencia requerida para poder insertarte.
						</p>
					</div>					
				</div>
			</div>
			<div class="col-md-8">
				<div class="section2-left">
					<img src="{{asset('img/bit3.png')}}" alt="">
				</div>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-md-8">
				<div class="section2-left">
					<img src="{{asset('img/bit4.png')}}" alt="">
				</div>
			</div>

			<div class="col-md-4">
				<div class="section2-right">
					<div class="sub-title-right ">
						CONVERTITE EN MENTOR
					</div>
					<div class="title-right">
						Al subir de nivel puedes ayudar a los mas nuevos
					</div>
					<div class="text-sec-r">
						<p class="info-p">
							Todos los educadores concuerdan en que enseñar es la mejor manera de aprender. 
							Cuando subes de nivel puedes ayudar a aquellos que recién se inician en su camino
							y sentirás que tus conocimientos se fortalecen.
						</p>
					</div>					
				</div>
			</div>
		</div>

		<!-- ----------------------------------------------------------------------------- -->

		<div class="row mt-5 offset-md-2">

			<div class="col-md-8 text-center">
				<h1 class="title-header2">Nuevo programando? </h1>
				<p class="info-p mt-4">No dejes que eso sea un problema, hay mucho material para aprender</p>
			</div>
		</div>

		<div class="row mt-5 offset-md-2 ">

			<div class="col-md-5 bg-light mr-1 p-2 sh-small">
				<div class="imagen-icon ">
					<img src="{{asset('img/icon2.png')}}" alt="" class="icon">
				</div>
				<div class="title-image">
					Aprende a usar GIT
				</div>
				<div class="info-p ">
					En todas las prácticas usaremos el control de versiones GIT indispensable para producción. 
				</div>
				<div class="link mt-5 ">
					<a href="https://github.com">Ir a Github</a>
				</div>
			</div>
			<div class="col-md-5 bg-light mr-1 p-2 sh-small">
				<div class="imagen-icon ">
					<img src="{{asset('img/icon1.svg')}}" alt="" class="icon">
				</div>
				<div class="title-image ">
					Aprende a usar tickets dev.
				</div>
				<div class="info-p ">
					El reparto de trabajo mediante tickets es ampliamente utilizado en los ambientes de desarrollo.
				</div>
				<div class="link mt-5 ">
					<a href="htpps://trello.com">Ir a Trello</a>
				</div>
			</div>

		</div>
<!-- ------------------------------------------------------------------------------------- -->

		<div class="row mt-5 offset-md-2">

			<div class="col-md-8 text-center mb-5">
				<h1 class="title-header2">Pasantías rentadas</h1>
				<p class="info-p mt-4">Aplica para nuestro sistema de pasantías laborales pagas.</p>
			</div>
		</div>

<!-- --------------------------------------------------------------------------------------- -->

		<div class="row text-center">
			<div class="col-md-4  ">
				<div class="img-card">
					<img src="{{asset('img/bit5.png')}}" alt="" class="bit">
				</div>
			</div>
			<div class="col-md-4  ">
				<div class="img-card">
					<img src="{{asset('img/bit6.png')}}" alt="" class="bit">
				</div>
			</div>
			<div class="col-md-4  ">
				<div class="img-card">
					<img src="{{asset('img/bit7.png')}}" alt="" class="bit">
				</div>
			</div>
		</div>

		<div class="row text-center">
			<div class="col-md-4  mt-2">	
			<div class="title-image">
				Tus progresos visibles para las empresas	</div>				
				<p class="info-p">A partir del nivel 5 ya pondremos tu perfil a la vista de los reclutadores y empresas que nos consultan por nuevos puestos de trabajo.</p>
			</div>
			<div class="col-md-4  mt-2">
				<div class="title-image">
					Nútrete de la comunidad y afianza tus habilidades
				</div>
				<p class="info-p">Utiliza la seecion de <a href="/comments">mensajes</a> para volcar tus dudas o 
				sugerencias, y recibe el apoyo de la comunidad que estamos fortaleciendo.</p>
			</div>
			<div class="col-md-4  mt-2">
				<div class="title-image">
					Comparte y eseña otros como te han enseñado a vos.
				</div>
				<p class="info-p">A partir del nivel 3 puedes ayudar y ser mentor de compañeros que se están sumando en esta aventura. Volcar tu experiencia será de gran ayuda para los mas nuevos.</p>
			</div>
		</div>

	</div><!--container-->

</body>    


@endsection