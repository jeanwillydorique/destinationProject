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
    return "Bonjour toi !!";
});

$router->get('/toutcequetuveux', function () use ($router) {
    return "AHAHAHAHAHAH!";
});

// $router->get('/user', 'UserController@index');

$router->get('/user', [
    'as' => 'user', 'uses' => 'UserController@index'
]);

$router->get('/getusers', [
    'as' => 'user', 'uses' => 'UserController@getUsers'
]);

$router->get('/getuser/{id}', [
    'as' => 'user', 'uses' => 'UserController@getUser'
]);