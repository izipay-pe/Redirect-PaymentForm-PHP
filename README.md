# Redirect-Form-Izipay in PHP

Visite la documentación para más información aquí:[Documentación](https://secure.micuentaweb.pe/doc/es-PE/form-payment/standard-payment/sitemap.html)

## 1.-Instalar el programa XAMPP que incluye PHP 8.0 en adelante.

```sh
Install XAMPP https://www.apachefriends.org/
``` 

## 2.-Descargar 
Descargar el proyecto .zip ingresado [aquí](https://github.com/izipay-pe/Redirect-Form-PHP-Tismart/archive/refs/heads/main.zip) ó clonarlo con git

```sh
git clone https://github.com/izipay-pe/Redirect-Form-PHP-Tismart.git
``` 

## 3.-Mover el proyecto y descomprimirlo en la carpeta htdocs 
Descomprir el proyecto en la carpeta htdos en la ruta de instalación de Xampp: `C:\xampp\htdocs`

![proyecto en xampp](/images/captura1.png)

## 4-Abrir la aplicación XAMPP Control Panel 
 Abrir la aplicación instalada de Xapp y ejecutar el botón **Start** con el servicio web de **Apache**, quedando de la siguiente manera:

![Xampp control panel](/images/captura2.png)

### Abrir el navegador web
Abrir la siguiente url en su navegador web (Chrome, Mozilla, Safari, etc) con el puerto 80 que abrió xampp : **http://localhost:80/Redirect-Form-PHP-Tismart-main/** y realizar una compra de prueba.

![Pasarela de pago](/images/captura3.png)

### Error: **PaymentFormError = 02 vads_side_id**  
 Este error saldrá porque no se tiene configurado las credenciales de integración en el archivo ./example.configKey.php .  
 Estas mismas credenciales se encuentran en su [Back Office Vendedor de Izipay](https://secure.micuentaweb.pe/vads-merchant/) en la siguiente ruta: **Configuracion - Tienda - Claves**  
 Más información [aquí](https://secure.micuentaweb.pe/doc/es-PE/form-payment/quick-start-guide/identificarse-durante-los-intercambios.html).  
 
![error en pasarela](/images/captura%20error.png)

## Configurar el identificador de su tienda y la clave:
Obtener las credenciales de su Back Office Vendedor y copiarlas en las variales correspondientes en el archivo: `example.configKey.php ` 

```sh
//Identificador de su tienda
$_SHOP_ID = "XXXXXXXXXXXX"; 

//Clave de TEST O PRODUCCIÖN de su tienda.
$_KEY = "XXXXXXXXXXXXXXXXXXXXXXX";

//URL del servidor de Izipay
$_URL_IZIPAY = "https://secure.micuentaweb.pe/vads-payment/";
``` 
