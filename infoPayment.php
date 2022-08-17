<?php
require_once "example.configKey.php";
session_start();
date_default_timezone_set("UTC");
$datos = array(
  "vads_action_mode" => "INTERACTIVE",
  "vads_amount" => $_POST["amount"]*100,
  "vads_ctx_mode" => "TEST",
  "vads_currency" => "604", // Moneda PEN
  "vads_cust_email" => $_POST["email"],
  "vads_page_action" => "PAYMENT",
  "vads_payment_config" => "SINGLE",
  "vads_site_id" => $_SHOP_ID, //id de tienda  8910212
  "vads_url_success" => "http://localhost/izipay/resultado.php",
  "vads_trans_date" => date("YmdHis"), //Fecha en formato UTC
  "vads_trans_id" =>  substr(md5(time()), -6),      //"af491z",
  "vads_version" => "V2",
  "vads_payment_cards" => "VISA;MASTERCARD;AMEX;DINNERS", //Forzar el tipo de tarjeta
  "vads_order_id" => uniqid("MyOrderId"),
);

$signature = getSignature($datos, $_KEY);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Redirect Form Izipay</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
</head>
<body>
  <div class="root">
    <div class="App">
      <h2>Confirmar compra <img src="https://iziweb001.s3.amazonaws.com/webresources/img/logo.png" alt="Logo de Izipay"></h2>
      <div class="content-checkout">
        <div class='cart'>
          <div class='Product'>
              <h4><?=$_SESSION["product"]?></h4><img src="<?=$_POST['image']?>" alt="<?=$_POST['image']?>">
              <p><span>S/</span><?=$_POST['amount']?></p>
          </div>
        </div>
        <div class='checkout'>
            <h3>Datos del cliente</h3>
            <form action="<?= $_URL_IZIPAY ?>" method="post">
                <div class='control-group'>
                    <input type="text" value="<?=$_POST["firstName"] ?>" disabled>
                </div>
                <div class='control-group'>
                    <input type="text" value="<?=$_POST["lastName"] ?>" disabled>
                </div>
                <div class='control-group'>
                    <input type='email' value="<?=$_POST["email"] ?>" disabled>
                </div>
                <input type="hidden" name="vads_action_mode" value="<?php echo $datos["vads_action_mode"] ?>" />
                <input type="hidden" name="vads_amount" value="<?php echo $datos["vads_amount"] ?>" />
                <input type="hidden" name="vads_ctx_mode" value="<?php echo $datos["vads_ctx_mode"] ?>" />
                <input type="hidden" name="vads_currency" value="<?php echo $datos["vads_currency"] ?>" />
                <!-- <input type="text" name="vads_cust_cell_phone" value="<?php echo $datos["vads_cust_cell_phone"] ?>" /> -->
                <input type="hidden" name="vads_cust_email" value="<?php echo $datos["vads_cust_email"] ?>" />
                <input type="hidden" name="vads_page_action" value="<?php echo $datos["vads_page_action"] ?>" />
                <input type="hidden" name="vads_payment_config" value="<?php echo $datos["vads_payment_config"] ?>" />
                <input type="hidden" name="vads_site_id" value="<?php echo $datos["vads_site_id"] ?>" />
                <input type="hidden" name="vads_trans_date" value="<?php echo $datos["vads_trans_date"] ?>" />
                <input type="hidden" name="vads_trans_id" value="<?php echo $datos["vads_trans_id"] ?>" />
                <input type="hidden" name="vads_version" value="<?php echo $datos["vads_version"] ?>" />
                <input type="hidden" name="vads_payment_cards" value="<?php echo $datos["vads_payment_cards"] ?>" />
                <input type="hidden" name="vads_order_id" value="<?php echo $datos["vads_order_id"] ?>" />
                <input type="hidden" name="vads_url_success" value="<?php echo $datos["vads_url_success"] ?>" />
          
                <input type="hidden" name="signature" value="<?= $signature ?>" />
                <button  type="submit" name="pagar">Confirmar</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>