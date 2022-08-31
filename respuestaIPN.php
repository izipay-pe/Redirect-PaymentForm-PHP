<?php
require_once "example.configKey.php";

// Respuesta mediante la URL de notificación Instantánea configurado en su Back Office Vendedor.
// Configuración - Reglas de notificaciones - URL de Notificación al Final del pago (Formulario API V1 y V2)
if(isset($_POST["vads_hash"])){

    if(getSignature($_POST, $_KEY) == $_POST["signature"]){

        echo "Pago exitoso";
        // Processing data
    }else{
        throw new Exception('An error occurred while computing the signature');
    }


}


