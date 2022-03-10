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
    return $router->app->version();
});

$router->get('x', 'itemsController@x');



$router->group(['prefix' => 'api'], function () use ($router) {
    $router->group(['prefix' => 'items'], function () use ($router) {
        $router->post('', 'itemsController@store');
        $router->get('', 'itemsController@index');
        $router->get('{id}', 'itemsController@show');
        $router->put('{id}', 'itemsController@update');
        $router->delete('{id}', 'itemsController@destroy');
        $router->get('{serieId}/episodios', 'CategoriesController@buscaPorSerie');
    });

    $router->group(['prefix' => 'categories'], function () use ($router) {
        $router->post('', 'CategoriesController@store');
        $router->get('', 'CategoriesController@index');
        $router->get('{id}', 'CategoriesController@show');
        $router->put('{id}', 'CategoriesController@update');
        $router->delete('{id}', 'CategoriesController@destroy');
    });
});
