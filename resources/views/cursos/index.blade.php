@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/all.css')}}">
<link rel="stylesheet" href="{{asset('css/cursos_index.css')}}">

<img src="{{asset('img/cursos_portada.jpg')}}" alt="imagen de portada" class="portada">


<section class="Cursoswrap">
    <h1>LISTADO DE CURSOS </h1>
    <div class="alert alertCurso" role="alert">
       <span><i class="fas fa-exclamation-circle"></i></span> ¿No lo tienes claro? Todos los cursos tienen una garantía de reembolso de 30 días
      </div>
<div class="cursowrapp-a">
           <!--MENU LATERAL-->
              <div class="menuLista">
                  <ul>
                      <li>Tema<span><i class="fas fa-chevron-down"></i></span></li>
                      <li>Subcategoría<span><i class="fas fa-chevron-down"></i></span></li>
                      <li>Nivel<span><i class="fas fa-chevron-down"></i></span></li>
                      <li>Idioma<span><i class="fas fa-chevron-down"></i></span></li>
                      <li>Características<span><i class="fas fa-chevron-down"></i></span></li>
                  </ul>
              </div>
   
     <div class="cardList">
          <!--TARJETA-->
            <a href="#"> 
                 <div class="cardDetail">
                       <div class="imagenCurso">
                          <img src="{{asset('img/ang.png')}}" alt="">      
                       </div>
                     
                     <div class="detailsWrapper">
                           <div class="cursosInfo">
                                <h2>Curso Integración Mercadopago Chekout-Pro  c/ PHP</h2>
                                <p class="primerhijo"> Aprende a programar desde cero y desarrollo web con JavaScript, jQuery, JSON, TypeScript, Angular, Node, MEAN, +30 horas.</p>
                                <p>54 horas en total * 502 clases * Principiantes.</p>
                                <p>Gustavo Valerio</p>
                           </div>
         
                         <div class="cursosPrecio">
                             <h3>9.99<span class="currency">US$</span></h3>
                         </div>
                     </div>
                 </div>
            </a>
      <!--TARJETA-->
        <!--TARJETA-->
        <a href="#"> 
            <div class="cardDetail">
                  <div class="imagenCurso">
                     <img src="{{asset('img/dw.png')}}" alt="">      
                  </div>
                
                <div class="detailsWrapper">
                      <div class="cursosInfo">
                           <h2>Curso Integración Mercadopago Chekout-Pro  c/ PHP</h2>
                           <p class="primerhijo"> Aprende CSS3, Maquetación web, Responsive Web Design, SASS, LESS, Flexbox, CSS Grid Layout y Bootstrap 4 desde cero +20h.</p>
                           <p>54 horas en total * 502 clases * Principiantes.</p>
                           <p>Gustavo Valerio</p>
                      </div>
    
                    <div class="cursosPrecio">
                        <h3>9.99<span class="currency">US$</span></h3>
                    </div>
                </div>
            </div>
       </a>
 <!--TARJETA-->
   <!--TARJETA-->
   <a href="#"> 
    <div class="cardDetail">
          <div class="imagenCurso">
             <img src="{{asset('img/ang.png')}}" alt="">      
          </div>
        
        <div class="detailsWrapper">
              <div class="cursosInfo">
                   <h2>Curso Integración Mercadopago Chekout-Pro  c/ PHP</h2>
                   <p class="primerhijo"> Aprende a programar desde cero y desarrollo web con JavaScript, jQuery, JSON, TypeScript, Angular, Node, MEAN, +30 horas.</p>
                   <p>54 horas en total * 502 clases * Principiantes.</p>
                   <p>Gustavo Valerio</p>
              </div>

            <div class="cursosPrecio">
                <h3>9.99<span class="currency">US$</span></h3>
            </div>
        </div>
    </div>
</a>
<!--TARJETA-->
     </div>
    
</div>    <!--WRAPP-A -->

</section>

<br>
<br>
<br>
<br>




@endsection