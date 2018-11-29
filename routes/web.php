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

$router->post('/adduser', [
    'as' => 'adduser', 'uses' => 'UserController@adduser'
]);

$router->post('/updateuser/{id}', [
    'as' => 'adduser', 'uses' => 'UserController@updateuser'
]);

$router->post('/deleteuser/{id}', [
    'as' => 'adduser', 'uses' => 'UserController@deleteuser'
]);



// CRUD destinations 

$router->get('/getDestinations', [
    'as' => 'getDestinations', 'uses' => 'ViewsController@getDestination'
]);
$router->post('/addDestination', [
    'as' => 'addDestination', 'uses' => 'DestinationController@addDestination'
]);
$router->post('/updateDestination/{id}', [
    'as' => 'updateDestination', 'uses' => 'DestinationController@updateDestination'
]);
$router->post('/deleteDestination/{id}', [
    'as' => 'deleteDestination', 'uses' => 'DestinationController@deleteDestination'
]);


// CUD Hotel

$router->post('/addHotel', [
    'as' => 'addHotel', 'uses' => 'HotelController@addHotel'
]);
$router->post('/updateHotel/{id}', [
    'as' => 'updateHotel', 'uses' => 'HotelController@updateHotel'
]);
$router->post('/deleteHotel/{id}', [
    'as' => 'deleteHotel', 'uses' => 'HotelController@deleteHotel'
]);

// CUD Type

$router->post('/addType', [
    'as' => 'addType', 'uses' => 'TypeController@addType'
]);
$router->post('/updateType/{id}', [
    'as' => 'updateType', 'uses' => 'TypeController@updateType'
]);
$router->post('/deleteType/{id}', [
    'as' => 'deleteType', 'uses' => 'TypeController@deleteType'
]);