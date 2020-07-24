@extends('layouts.app')


@section('content')
<div class="container">
    <form action="https://algodeprueba.tk/checkout.php" method="post" class="form mt-5" id="formulario">
        @csrf
        <label for="importe_total">Importe a donar: </label><br>
        <input type="number" name="importe_total" >
        <input type="hidden" name="cantidad_items" value="1">
        <input type="hidden" name="titulo" value="Mi compra.">
        <br><br>
        <input type="submit" class="btn btn-primary" id="boton" value="Pagar">
    </form>
</div>
@endsection