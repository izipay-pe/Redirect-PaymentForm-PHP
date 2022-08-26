# Redirect-Form-Izipay in PHP

Visite la documentación para más información aquí:[Documentación](https://secure.micuentaweb.pe/doc/es-PE/form-payment/standard-payment/sitemap.html)

## Instalar el programa XAMPP que incluye PHP 8.0 en adelante.

```sh
Install XAMPP https://www.apachefriends.org/
``` 

##Descargar el proyecto o clonarlo con git
```sh
https://github.com/izipay-pe/Redirect-Form-PHP-Tismart/archive/refs/heads/main.zip
ó
git clone https://github.com/izipay-pe/Redirect-Form-PHP-Tismart.git
``` 

## 1.-XAMPP
- Mover el proyecto y descomprimirlo en la carpeta htdocs de XAMPP quedando de esta manera:

![proyecto en xampp](/images/captura1.png)

- Abrir la aplicación XAMPP Control Panel y ejecutar el botón **start** el servicio web de **Apache** quedando de la siguiente manera:

![Xampp control panel](/images/captura2.png)

- Abrir el su navegar la siguiente url: **http://localhost:80/Redirect-Form-PHP-Tismart-main/** y realizar una compra de prueba.

![Pasarela de pago](/images/captura3.png)

- Te saldrá este error: **PaymentFormError = 02 vads_side_id**
 Este error saldrá porque no se tiene configurado las credenciales de integración en el archivo ./example.configKey.php .
 Estas mismas credenciales se encuentran en su [Back Office Vendedor de Izipay](https://secure.micuentaweb.pe/vads-merchant/) en la siguiente ruta: **Configuracion - Tienda - Claves**
 Más información [aquí](https://secure.micuentaweb.pe/doc/es-PE/form-payment/quick-start-guide/identificarse-durante-los-intercambios.html).
 
![proyecto en xampp](/images/captura4.png.png)

## Configurar el identificador de su tienda y la clave:

./example.configKey.php

```sh
//Identificador de su tienda
$_SHOP_ID = "XXXXXXXXXXXX"; 

//Clave de TEST O PRODUCCIÖN de su tienda.
$_KEY = "XXXXXXXXXXXXXXXXXXXXXXX";

//URL del servidor de Izipay
$_URL_IZIPAY = "https://secure.micuentaweb.pe/vads-payment/";
``` 
