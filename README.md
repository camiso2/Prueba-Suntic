# Prueba-Suntic
Sotfware de prueba para Suntic s.a.s

Sistema desarrollado  

El sistema registra usuarios en una base de datos MySql teniendo en cuenta todas las validaciones necesarias realizadas desde el Back-end para asegurar el correcto funcionamiento del software.


##Utilidades  :: Registro de usuarios

* Valida si un email ya fue registrado en el sistema.
* Valida un mínimo de 6 caracteres para la contraseña.
* Valida que la confirmación de la contraseña  y la contraseña sean iguales.
* Valida que todos los campos como requeridos.
* Encriptación yt desencriptación de Contraseñas con hash sha256 bajo secret_ket(string personalizado).
* Almacena los datos en una base de datos relacional(MySql).
* Clase para codificación de la respuesta entregada bajo http code response.
* Alertas de registro de usuarios o errores del sistema.


##Tecnologías Usadas
* Front-end : JS->Jquery, Ajax, Bootstrap4, html5, css3
* Back-end : Laravel
* Tiempo de desarrollo 10 horas


##LIBRERIAS EXTERNAS
<p align="left">
* <a href="https://sweetalert2.github.io/">Sweet Alert2</a>
* <a href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">Bootstrap 4</a>
</p>

##Pasos para probar el proyecto
* Clonar el proyecto : git clone https://github.com/camiso2/Prueba-Suntic.git
* Decomprimir el archivo (Prueba-Suntic.rar).
* Importar la base de datos a MySql (suntic.sql) o tambien se puede crear la base de datos según el nombre de DB_DATABASE del documento .env y ejecutar en la cosola (php artisan migrate)
* Se requiere una versión de PHP/7.3.2, recomiendo xampp -v (7.3.2-2).
* Abrir la carpeta que contiene el proyecto y ejecutar (php artisan serve) o tambien puede jecutar (php artisan serve --port=8001)

## <a href="https://youtu.be/zKfy2J88vQ4" target="_blank"> VER DEMOSTRACIÓN FUNCIONAL</a>


Desarrollado
* Jaiver Andrés Ocampo Oviedo
* Full Stack Developer
* Contacto : +57 3174885954
* Julio 2024 
