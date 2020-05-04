<h1>Api en Laravel test Agencia Ego</h1>
<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


<h3>Instrucciones para instalar la api en un servidor</h3>
<p>Para correr la api es necesario contar con un entorno de desarrollo o un servidor. El que yo use es Laragon, pero es casi lo mismo en todos los casos(Hoestead,Wamp ,Xampp etc)</p>
<p>Como instalar Laragon?
https://styde.net/laragon-un-entorno-de-desarrollo-para-laravel-en-windows/
<h3>Clonar el repositorio para disponer de los archivos en local</h3>

https://desarrolloweb.com/articulos/git-clone-clonar-repositorio.html
<p/>
<h3>Instalar dependencias con Composer</h3>
<p>Lo primero que se debe luego de descargar el proyecto existente a tu maquina local y después de haber configurado tu virtualhost, es instalar las dependencias del proyecto con Composer.
Si no tenes descargado Composer  ir a el siguiente tutorial
https://www.ecodeup.com/aprende-a-instalar-composer-en-windows-10/
</p>


Esto lo puedes hacer usando el siguiente comando en la consola, dentro de la carpeta raíz del proyecto:

composer install


De esta forma se instalarán todas las dependencias necesarias para el proyecto que fueron definidas en el archivo composer.json durante el desarrollo.
<h3>Configuración de Laravel</h3>
Archivo de configuración de Laravel
Cada nuevo proyecto con Laravel, por defecto tiene un archivo .env con los datos de configuración necesarios para el mismo, cuando utilizamos un sistema de control de versiones como git, este archivo se excluye del repositorio por medidas de seguridad .

Para más información visita Configuración de Git en proyectos de Laravel

Sin embargo  existe un archivo llamado .env.example que es un ejemplo de como crear un el archivo de configuración, podemos copiar este archivo desde la consola con:

 .env.example .env
De esta forma ya tenemos el archivo de configuración de nuestro proyecto.

<h3>Creando un nuevo API key</h3>
Por medidas de seguridad cada proyecto de Laravel cuenta con una clave única que se crea en el archivo .env al iniciar el proyecto. En caso de que el desarrollador no te haya proporcionado están información, puedes generar una nueva API key desde la consola usando:

php artisan key:generate
Base de datos y migraciones
Por lo general las bases de datos en los proyectos de Laravel se crean haciendo uso de las migraciones.



<h3>Crear una base de datos por consola</h3>

Desde la consola (usando MySql) podrías hacer algo similar a esto

mysql -uroot -psecret


root es tu usuario de base de datos y secret tu contraseña de MySql

Con esto habrás ingresado a la consola de MySql y desde ahí creas la base de datos con:

mysql> CREATE DATABASE tu_base_de_datos;

<h3>Credenciales de la base de datos</h3>
Posteriormente debes agregar las credenciales al archivo .env

DB_HOST=localhost
DB_DATABASE=tu_base_de_datos
DB_USERNAME=root
DB_PASSWORD=

<h3>Ejecutar migraciones</h3>
Finalmente estarás habilitado para ejecutar la migración desde la consola usando artisan


php artisan migrate 



<h3>LLegados a este punto  tenemos todo lo necesario para correr en  tu servidor la api. <br></h3>

Los endpoints que desarrolle son los siguientes<br>



Register API: Verb:POST, URL:http://localhost:82/api/register<br>
Login API: Verb:POST, URL:http://localhost:82/api/login<br>
Car API all cars GET (No requiere loguearse) : URL:http://127.0.0.1:82/api/cars<br>
Car API car single GET (No requiere loguearse) : URL:http://127.0.0.1:82/api/cars/4<br>
Car API car edit  Verb:UPDATE : URL:http://127.0.0.1:82/api/cars/4/edit<br>
Car API car delete  Verb:DELETE : URL:http://127.0.0.1:82/api/cars/4/<br>


La aplicacion react se conecta a estas dos rutas , la coleccion de autos y el auto individual:<br>
Car API all cars GET (No requiere loguearse) : URL:http://127.0.0.1:82/api/cars<br>
Car API car single GET (No requiere loguearse) : URL:http://127.0.0.1:82/api/cars/4<br>

