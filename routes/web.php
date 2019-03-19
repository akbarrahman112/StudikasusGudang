<?php

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
    return $router->app->version();
});

$router->post('/barang', 'BarangController@create');
$router->get('/barang', 'BarangController@read');
$router->post('/barang/{id}', 'BarangController@update');
$router->delete('/barang/{id}', 'BarangController@delete');

$router->get('/barang/{id}', 'BarangController@detail');
