@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{asset('css/comun.css')}}">

<div class="container mt-4">

    <div class="seccion">
    <h3>Basicamente....</h3>
        <div class="parra">
    
            <p>Bueno la idea principal surgió del grupo de Facebook <a href="https://www.facebook.com/groups/primerempleoit" target="blank">Primer empleo IT </a> 
            que generosamente nos permitió conocernos. Leo frecuentemente la necesidad de la mayoría de nosotros que tratamos de subirnos al tren de la 
            industria del desarrollo de software y sus disciplinas satélites, lo difícil que es dar los primeros pasos, la inserción en un grupo de trabajo y la experiencia para 
            terminar de dar forma a nuestros conocimientos. Por eso estoy creando este espacio para poder crear de forma colaborativa un lugar donde
            podamos practicar en un ambiente productivo nuestras habilidades sean del nivel que sean.</p>

        </div>
    </div>
    <div class="seccion">
        <h3>Que vamos a hacer?</h3>
            <div class="parra">
        
                <p>La verdad no esta 100% definido que tipo de aplicación web vamos a desarrollar ni que tecnologías vamos a tratar de aplicar
                    para lograrla, en los próximos dias se dará a conocer un proyecto y se pondrá a votacion de los developers participantes la elección de las tecnos a usar.
                    Pero cuidado! nada nos impide realizar cualquier proyecto en mas de un stack o conjunto de herramientas.</p>
    
            </div>
        </div>
        <div class="seccion">
            <h3>Lo importante..</h3>
                <div class="parra">
            
                    <p>Las máximas mas importantes de este proyectos son la igualdad, todos tendremos mayor cantidad posible de participación, la democracia, nadie practicamente impondrá sino que todo será consensuado
                        con los participanes(en la medidad de lo posible) y la mos importante que TODOS los que colaboren podrán afrecer este proyecto como referencia de sus habilidades para cualquiera que quiera comprobarlo. 
                    </p>
        
                </div>
            </div>

            <div class="participar">
                <a href="/register" class="btn btn-primary">Quiero participar</a>
            </div>
</div>
    
@endsection