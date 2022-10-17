# Redirect-Form-Izipay in PHP

Este es un ejemplo de un carrito de compras con la pasarela de pago de Izipay utilizando el formulario de pago en redirección.  
Visite la documentación para más información aquí: [Documentación Izipay](https://secure.micuentaweb.pe/doc/es-PE/form-payment/standard-payment/sitemap.html)

![demo](https://github.com/izipay-pe/Redirect-PaymentForm-T1.Net/blob/main/images/demofinal2.png)

<a name="Requisitos_Previos"></a>

## Requisitos Previos.

* Extraer claves de autentificación. [Guía Aquí](https://github.com/izipay-pe/obtener-credenciales-de-conexion)
* Instalar XAMPP [Aquí](https://www.apachefriends.org/es/index.html)

## 1.- Crear el proyecto 
Descargar el proyecto .zip ingresado [aquí](https://github.com/izipay-pe/Redirect-Payment-Form-PHP/archive/refs/heads/main.zip) ó clonarlo con git

```sh
git clone https://github.com/izipay-pe/Redirect-Payment-Form-PHP.git
``` 

* Paso 1.- Mover el proyecto y descomprimirlo en la carpeta htdocs en la ruta de instalación de Xampp: `C:\xampp\htdocs`

  ![proyecto en xampp](/images/captura1.png)

* Paso 2.- Abrir la aplicación XAMPP Control Panel y ejecutar el botón **Start** del modulo de **Apache**, quedando de la siguiente manera:

  ![Xampp control panel](/images/captura2.png)

* Paso 3.- Abrir el navegador web (Chrome, Mozilla, Safari, etc): **http://localhost:80/Redirect-Payment-Form-PHP/** y realizar una compra de prueba.

  ![Pasarela de pago](/images/captura3.png)

* Error: **PaymentFormError = 02 vads_side_id**, este error saldrá porque no se tiene configurado las credenciales de integración en el archivo **./example.configKey.php** .  
 Estas mismas credenciales se encuentran en su [Back Office Vendedor de Izipay](https://secure.micuentaweb.pe/vads-merchant/) en la siguiente ruta: **Configuracion - Tienda - Claves**  
 Más información [Ver requisitos previos](#Requisitos_Previos).
 
  ![error en pasarela](/images/captura%20error.png)

## 2.- Configurar el identificador de su tienda y la clave:
Obtener las credenciales de su Back Office Vendedor, [ver requisitos previos](#requisitos-previos), y copiarlas en las variales correspondientes en el archivo: `example.configKey.php ` 

```sh
//Identificador de su tienda
$_SHOP_ID = "XXXXXXXXXXXX"; 

//Clave de TEST O PRODUCCIÖN de su tienda.
$_KEY = "XXXXXXXXXXXXXXXXXXXXXXX";

//URL del servidor de Izipay
$_URL_IZIPAY = "https://secure.micuentaweb.pe/vads-payment/";
``` 
## 3.- Configurar la respuesta del pago por IPN (Instant Payment Notification)
Configurar la URL de notificación al final del pago para que su servidor web esté al tanto de la información del estado de pago de la transacción. Vea la documentación para más información. Aquí [IPN](https://secure.micuentaweb.pe/doc/es-PE/form-payment/quick-start-guide/implementar-la-ipn.html)

* Ver manual de implementacion de la IPN [Aquí](https://secure.micuentaweb.pe/doc/es-PE/rest/V4.0/kb/payment_done.html)

* Ver el ejemplo de la respuesta IPN con PHP [Aquí](https://github.com/izipay-pe/Redirect-PaymentForm-IpnT1-PHP)

* Ver el ejemplo de la respuesta IPN con NODE.JS [Aquí](https://github.com/izipay-pe/Response-PaymentFormT1-Ipn)

  ![URL de notificacion](/images/capturaIPN.png)

## 4.- Tranascción de prueba
El formulario de pago está listo, puede intentar realizar una transacción utilizando una tarjeta de prueba con la barra de herramientas de depuración (en la parte inferior de la página).

  ![tarjeta](https://github.com/izipay-pe/Redirect-PaymentForm-T1.Net/blob/main/images/tarjetas2.png)

## 5.- Soporteecommerce@izipay.pe
Para más información comunicarse al correo del equipo de soporte de Izipay.  
**Asunto**: Mensaje + RUC + codigo de comercio / Razon Social.

