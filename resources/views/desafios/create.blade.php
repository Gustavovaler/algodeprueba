@extends('layouts.app')

@section('content')
    

            <script>
                tinymce.init({
                    selector: '#mytextarea'});
            
                    </script>
            <form method="post" action="/desafios">
                @csrf
                <textarea id="mytextarea" name="mytextarea">
                  Hello, World!
                </textarea>

                <input type="hidden" name="main_lang" value="html">

                <input type="submit" value="enviar">
              </form>
              
@endsection    
             
              