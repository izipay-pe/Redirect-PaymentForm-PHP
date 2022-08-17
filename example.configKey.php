<?php
//Identificador de su tienda
$_SHOP_ID = "XXXXXXXXXXXX"; 

//Clave de TEST O PRODUCCIÖN de su tienda.
$_KEY = "XXXXXXXXXXXXXXXXXXXXXXX";

//URL del servidor de Izipay
$_URL_IZIPAY = "https://secure.micuentaweb.pe/vads-payment/";

//FUNCION para obtener el signature
function getSignature($params, $keys)
{
  $content_signature = "";
  // Ordenar los campos alfabéticamente
  ksort($params);
  foreach ($params as $name => $value) {
    // Recuperación de los campos vads_
    if (substr($name, 0, 5) == 'vads_') {
      // Concatenación con el separador "+"
      $content_signature .=  $value . "+";
    }
  }
  // Añadir la clave al final del string
  $content_signature .= $keys;
  // Codificación base64 del string cifrada con el algoritmo HMAC-SHA-256
  $signature = base64_encode(hash_hmac('sha256', utf8_encode($content_signature), $keys, true));
  return $signature;
}