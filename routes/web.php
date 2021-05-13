<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('variables', function(){
$mensaje = 10;
var_dump($mensaje);
echo "<hr />";
$mensaje = "Nicole";
var_dump($mensaje);
});

Route::get('arreglos', function(){
//Arreglo: estructura de datos
//ARREGLO DE UNA SOLA DIMESION
//AN ES EL INDICE CLAVE
$estudiante = [ "AN" => "Ana",
                "MA" => "Maria",
                "JO" => "Jorge"];
echo "<pre>";
print_r($estudiante);
echo "<pre>";
});

//ARREGLO DOS DIMENSIONES
Route::get('paises', function(){
    //arrego primera dimesion
    $paises = [ "Colombia" => [
        //arreglos segunda dimesion
                "capital" => "Bogotá",
                "moneda" => "Peso",
                "poblacion" => 50.34
    ],
              "Peru" => [
                "capital" => "Lima",
                "moneda" => "Sol",
                "poblacion" => 32.51
              ],
              "Paraguay" => [
                "capital" => "Asunción",
                "moneda" => "Guaraní paraguayo",
                "poblacion" => 7
              ]
            ];

            //INVOCAR VISTA
            return view("paisesn")->with("naciones" , $paises );

//para recorrer un arreglo foreach
//foreach($paises as  $pais ){

//para recorrer un error con el nombre de lad primeras dimensiones
           // foreach($paises as $nombrepais => $pais ):
            //echo "<h1>$nombrepais</h1>";
            //echo "<pre>";
//Imprimir solo datos de dimesion uno y dos(datos en concreto)
//print_r($paises["Colombia"]["moneda"]);

//Imprimir solo la capital utilizando el foreach
            //echo ($pais["capital"]);
            //echo "<pre>";
            //echo ($pais["moneda"]);
            //echo "<pre>";
            //echo ($pais["poblacion"]);
            //echo "<pre>";
            //echo "<hr />";
            //endforeach;

        });

//SALTO DE LINEA echo ($pais["moneda"]);
