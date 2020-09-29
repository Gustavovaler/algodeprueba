@extends('layouts.app')

@section('content')
     <script>
        tinymce.init({
        selector: '#mytextarea'});
            
      </script>

  <div class="container">
    <div class="titulo">
      <h2>Nuevo desafío</h2>
    </div>
    <hr>
    <form method="post" action="/desafios">
    @csrf
    <textarea id="mytextarea" name="mytextarea">
        Hello, World!
    </textarea>

      <input type="hidden" name="main_lang" value="html">

      <input type="submit" value="enviar">
    </form>
  </div>            
@endsection    
             
              