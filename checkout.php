
<?php

$importe = $_POST['importe_total'];
$cantidad_items = $_POST['cantidad_items'];
$title = $_POST['titulo'];

$access_token = 'APP_USR-7064411867690821-021108-7b70cec08d364105e434aed9861d7a96-227605452';

$public_key = "APP_USR-cda32700-847d-4a71-b109-59733766d1ca";

// SDK de Mercado Pago
require  __DIR__.'/laravel/vendor/autoload.php';

try {
    MercadoPago\SDK::setAccessToken($access_token);

  // Crea un objeto de preferencia
  $preference = new MercadoPago\Preference();
  $url="https://algodeprueba.tk"; // ejemplo https://mi_sitio.com
  $preference->back_urls = array(
    "success" => $url."/pago-aprobado",//donde redirigir pago exitoso
    "failure" => $url."/pago-rechazado",//donde redirigir pago rechazado
    "pending" => $url."/pago-pendiente"//donde redirigir pago pendient
);



  // Crea un ítem en la preferencia
  $item = new MercadoPago\Item();
  $item->title = $title;
  $item->quantity = $cantidad_items;
  $item->unit_price = $importe;
  $preference->items = array($item);
  $preference->save();
  } catch (Throwable $t) {
    echo $t->getMessage() . PHP_EOL;
   }
?>


<script>location.href="<?php echo $preference->init_point; ?>"</script>
<!-- <form action="/procesar-pago" method="POST" id="forma"> 
  <script
   src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
   data-preference-id="?php echo $preference->id; ?>" 
 data-public-key="?php echo $public_key; ?>" >
  </script>
</form>

<script>
function enviar(){
  const b = document.getElementsByClassName("mercadopago-button");
  b[0].style.display = "none";
  b[0].click();
}
enviar() -->
</script>