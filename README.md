<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://www.techies.es/wp-content/uploads/2020/09/netflix-wallpaper-1024x674.jpeg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## VIDEO CLUB

Proyecto desarrollado con proposito de desarrollar la prueba tecnica para la empresa https://www.celuweb.com/ para el cargo como desarrollador PHP

<h5>Requerimientos<h5>
Queremos crear un sistema para la gestión de un videoclub. Tendrá 2 funciones principalmente: 
    
    1. Tener un inventario de películas
    2. Calcular los precios de los alquileres
    
<b>Los 3 tipos de películas son:</b>
    
    1. Nuevos lanzamientos: El precio unitario por cada uno de los días de alquiler.
    2. Películas normales: Precio unitario por los tres primeros días. Cada día adicional supondrá un incremento de 15% del precio unitario por día.
    3. Películas viejas: Precio unitario por los cinco primeros días. Cada día adicional supondrá un incremento de 10% del precio unitario por día. 

<b>Descripción de la tarea</b>
    
Queremos que se cree BackOffice donde se expongan las siguientes operaciones:
    
    1. CRUD de películas con los siguientes campos como mínimo que se deben tener en cuenta.
    
        a.Nombre
        b.Sinopsis
        c.Precio Unitario
        d.Tipo, Genero
        e.Fecha de estreno
    
   2. CRUD de alquileres (Alquiler para una o varias películas y cálculo del precio) con los siguientes campos como mínimo que se deben tener en cuenta.
    
            a.Cliente
            b.Películas
            c.Valor Total
            d.Fecha Inicio
            e.Fecha Fin 
 
 ## ¿Como ejecutar el proyecto?
    
        1. Descargaremos XAMPP (sistema de gestión de bases de datos (LOCAL) MySQL) https://www.apachefriends.org/es/index.html
    
        * Ejecutamos hasta tener la ruta en el disco local C: XAMMPP
    
    2.Descargaremos COMPOSER (sistema de gestión de paquetes para programar en PHP) https://getcomposer.org/download/ 
    
        ![image](https://user-images.githubusercontent.com/57229469/215004596-ed8433ec-b6b4-45fe-85b9-f1973b29bf3e.png).
        *Al descargar el .exe lo ejecutaremos y nos preguntara donde deseamos guardarlo y le damos en xampp/php.exe.Pero primero debemos de tener el xampp instalado o          un motor de base de datos para PHP. 
    
    3.  Descargaremos Node.js (entorno de ejecución para JavaScript construido) https://nodejs.org/es/ .Tambien, solo ejecutamos el archi.msi y damos siguiente hasta finalizar.
    4. Deberemos de tener un entorno de desarrollo. En este caso yo utilice VisualStudio Code https://code.visualstudio.com/
    5. para verificar que se instalaron el COMPOSER y el NODE.js abriremos la terminal y ejecutaremos los siguientes comandos 
    
         *node --version -> Aca nos debera mostrar la version del node
         *composer --version -> Aca nos debera mostrar la version del composer
    
    6. Abriremos el Xampp Control panel y ejecutaremos los dos primeros Action hasta estar el puerto en ejecucion (Apache, Mysql deben de estar en color verde)
    7. Crearemos una base de datos en el (http://localhost/phpmyadmin/index.php) con nombre videoclub, luego importaremos el videoclub.sql (base de datos)
    8. Descargaremos el proyecto y lo pondremos en la ruta C:\xampp\htdocs.
    9. Abriremos el proyecto en Visual Studio Code
    10. Abriremos nuevamente la terminal puede ser la visual studio code o la de windows y accederemos a la siguiente ruta con el siguiente comando 
    "cd C:\xampp\htdocs\videoclub" esto con el fin de ingresar a la carpeta del proyecto.
    11. Ejecutaremos "php artisan serve --port=90" en la terminal para ejecutar el proyecto y el nos mostrara el puerto o ruta por donde esta ejecutando el servidor en 
    en este caso mi puerto es "[http://127.0.0.1:90]" esta ruta la pegaremos en el navergador de preferencia 
    12. ya tenienendo el proyecto ejecutando iremos al login en la parte superior derecha 
    13. para ingresar al sistema usaremos las siguientes credenciales
    
## USUARIO :admin@gmail.com 
    
## PASSWORD : 123456789
    
    14. Y alli ya encontramos todo lo requerido anteriormente

## ¿En que lenguaje se desarrollo el proyecto?
    El proyecto fue desarrollado En PHP con el FRAMEWORK Laravel, como un template de https://www.creative-tim.com/templates/laravel-free, usando Boostrap, HTML5, CSS
    JavaScript
    
## ¿Componentes principales?
    Controlador 
        ![image](https://user-images.githubusercontent.com/57229469/215009848-c51d5f76-275f-4445-82ea-f9a8b98dda26.png)
    Modelo
        ![image](https://user-images.githubusercontent.com/57229469/215009934-289df422-8480-4dae-b249-6e112ce507b0.png)
    Recursos como lo son JS, Imagenes, CSS
        ![image](https://user-images.githubusercontent.com/57229469/215010142-da5c9110-1548-46f3-8516-65dadc829b06.png)
    y las vistas 
        ![image](https://user-images.githubusercontent.com/57229469/215010220-5509ef02-e3e3-4427-80e5-8c30dbe93af1.png)
    Y las rutas en la cual mandabamos la informacion del controlador a las vistas
        ![image](https://user-images.githubusercontent.com/57229469/215010286-585751f4-2d35-48df-86e5-01a2e3413339.png)
