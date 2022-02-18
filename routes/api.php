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
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->group(['prefix' => 'events'], function () use ($router) {
        $router->get('/', 'EventController@index');
        $router->post('{eventId}/reserve', 'EventController@reserve');
        $router->post('{eventId}/cancel', 'EventController@cancel');
    });
});