@extends('layouts.app')


@section('content')
<div class="container">
    <h3 class="display-4 mt-3">Tu donación nos ayuda a seguir adelante. Gracias !!!</h2>

    <div class="row">
        <div class="col-md-6 offset-3">
        <form action="https://algodeprueba.tk/checkout.php" method="post" class="form mt-5" id="formulario">
            @csrf
            <label for="importe_total">Importe a donar: </label><br>
            <input type="number" name="importe_total" min="1" value="100" class="form-control">
            <input type="hidden" name="cantidad_items" value="1">
            <input type="hidden" name="titulo" value="Mi compra.">
            <input type="hidden" name="compra_id" value="65gd8fg9dfg5"><!--  valor para identificar la venta de forma unica -->
            <br><br>
            <input type="submit" class="btn btn-primary" id="boton" value="Pagar">
        </form>
        </div>
    </div>
  
</div>
@endsection