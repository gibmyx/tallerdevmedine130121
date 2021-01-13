<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Taller Dev Medine 13/01/2021 "TDD"

se solicitar crear un sistema que registre las personas que quieren solicitar
un prestamo para la compra de una vivienda, teniendo en cuenta los siguientes requerimientos:

* no permitir personas mayor de 50 años.
* no permitir personas menor de 20 años (mujer).
* no permitir personas menor de 25 años (hombre).
* tener un salario minimo de 500$ mensual.
* prestamo dentro del rango de 20.000$ a 50.000$
* no tener facturas vencidas
* y se listen todas las personas que han realizado una solicitud en la vista principal

para este ejeccio se quiere implementar la metodologia TDD para los flujos basicos de un C.R.U.D asi como tambien para las diversas validaciones solicitadas por el cliente.

utilizando la libreria PHPUnit que trae laravel por default.
nota: solo utilizar los test de unidad.

## Install.

* git clone https://github.com/gibmyx/tallerdevmedine130121.git
* composer install
* npm install
* git checkout -b "tu-nombre"
* npm run dev (compilar codigo JS/Vue)

## DB
* copiar archivo .env.example con el nombre .env
* Crear una DB con el nombre "talledev"  
  </br>
  DB_DATABASE=talledev </br>
  DB_USERNAME=  </br>
  DB_PASSWORD= </br>
  </br>
* agregar las credenciales de tu DB
* correr migraciones <strong> php artisan migrate </strong>
 
