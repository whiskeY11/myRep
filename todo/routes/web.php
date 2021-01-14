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

$router->get('add/{nazov}&{popis}', [
    'as' => 'add', 'uses' => 'TodoController@add'
]);

$router->get('remove/{id}', [
    'as' => 'remove', 'uses' => 'TodoController@remove'
]);

$router->get('edit/{id}&{nazov}&{popis}', [
    'as' => 'edit', 'uses' => 'TodoController@edit'
]);

$router->get('getList', [
    'as' => 'getList', 'uses' => 'TodoController@getList'
]);
