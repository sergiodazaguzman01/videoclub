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
        a. Nombre
        b. Sinopsis
        c. Precio Unitario
        d. Tipo, Genero
        e. Fecha de estreno
   2. CRUD de alquileres (Alquiler para una o varias películas y cálculo del precio) con los siguientes campos como mínimo que se deben tener en cuenta.
        a. Cliente
        b. Películas
        c. Valor Total
        d. Fecha Inicio
        e. Fecha Fin 
 
 ¿Como ejecutar el proyecto?
    1. Descargaremos XAMPP (sistema de gestión de bases de datos (LOCAL) MySQL) https://www.apachefriends.org/es/index.html
        * Ejecutamos hasta tener la ruta en el disco local C: XAMMPP
    2.Descargaremos COMPOSER (sistema de gestión de paquetes para programar en PHP) https://getcomposer.org/download/ 
        ![image](https://user-images.githubusercontent.com/57229469/215004596-ed8433ec-b6b4-45fe-85b9-f1973b29bf3e.png).
        *Al descargar el .exe lo ejecutaremos y nos preguntara donde deseamos guardarlo y le damos en xampp/php.exe.Pero primero debemos de tener el xampp instalado o          un motor de base de datos para PHP. 
    3.  Descargaremos Node.js (entorno de ejecución para JavaScript construido) https://nodejs.org/es/
        Tambien, solo ejecutamos el archi.msi y damos siguiente hasta finalizar.
    4. Deberemos de tener un entorno de desarrollo. En este caso yo utilice VisualStudio Code https://code.visualstudio.com/
    5. para verificar que se instalaron el COMPOSER y el NODE.js abriremos la terminal y ejecutaremos los siguientes comandos 
       node --version -> Aca nos debera mostrar la version del node
       composer --version -> Aca nos debera mostrar la version del composer
    6. Abriremos el Xampp Control panel y ejecutaremos los dos primeros Action hasta estar el puerto en ejecucion (Apache, Mysql deben de estar en color verde)
    7. Descargaremos el proyecto y lo pondremos en la ruta C:\xampp\htdocs.
    8. Abriremos el proyecto en Visual Studio Code
    9.
  
    
    

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
