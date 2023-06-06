<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    echo '<h1>Hola mundo!!!</h1>';
    return $router->app->version();
});

$router->get('verEstudiantes', 'EstudianteController@index');
$router->get('mostrarEstudiantes/{coidigo}', 'EstudianteController@show');
$router->post('crearEstudiantes', 'EstudianteController@store');
$router->put('modificarEstudiantes/{codigo}', 'EstudianteController@update');
$router->delete('eliminarEstudiantes/{codigo}', 'EstudianteController@destroy');


$router->get('verActividades', 'ActividadController@index');
$router->get('mostrarActividades/{id}', 'ActividadController@show');
$router->post('crearActividades', 'ActividadController@store');
$router->put('modificarActividades/{id}', 'ActividadController@update');
$router->delete('eliminarActividades/{id}', 'ActividadController@destroy');