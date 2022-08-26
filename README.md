# Redirect-Form-Izipay in PHP

Visite la documentación para más información:

https://secure.micuentaweb.pe/doc/es-PE/form-payment/standard-payment/sitemap.html

Instalar el programa XAMPP que incluye PHP 8.0 en adelante.

```sh
Install XAMPP https://www.apachefriends.org/
``` 

Descargar el proyecto o clonarlo con git
```sh
https://github.com/izipay-pe/Redirect-Form-PHP-Tismart/archive/refs/heads/main.zip
ó
git clone https://github.com/izipay-pe/Redirect-Form-PHP-Tismart.git
``` 

1.-Con XAMPP
1.1.-Mover el proyecto y descomprimirlo en la carpeta htdocs de XAMPP quedando de esta manena
![Image text](https://github.com/izipay-pe/Redirect-Form-PHP-Tismart/blob/main/images/captura1.png)

Dirigirse a la capeta del proyecto descargado desde la consola de comando de windows

Configurar el identificador de su tienda y la clave:

https://secure.micuentaweb.pe/doc/es-PE/form-payment/quick-start-guide/identificarse-durante-los-intercambios.html

./example.configKey.php
```sh
//Identificador de su tienda
$_SHOP_ID = "XXXXXXXXXXXX"; 

//Clave de TEST O PRODUCCIÖN de su tienda.
$_KEY = "XXXXXXXXXXXXXXXXXXXXXXX";

//URL del servidor de Izipay
$_URL_IZIPAY = "https://secure.micuentaweb.pe/vads-payment/";
``` 
