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

// Ajouter un aéroport de départ
$router->post('/addDepartureAirport', [
    'as' => 'addDepartureAirport',
    'uses' => 'DepartureAirportController@addDepartureAirport'
]);

// Supprimer un aéroport de départ
$router->post('/deleteDepartureAirport/{id}', [
    'as' => 'deleteDepartureAirport',
    'uses' => 'DepartureAirportController@deleteDepartureAirport'
]);

// Update un aéroport de départ
$router->post('/updateDepartureAirport/{id}', [
    'as' => 'updateDepartureAirport',
    'uses' => 'DepartureAirportController@updateDepartureAirport'
]);

///////////////////////////////////////////////////////////////////////

// Ajouter un aéroport d'arrivé
$router->post('/addArrivalAirport', [
    'as' => 'addArrivalAirport',
    'uses' => 'ArrivalAirportController@addArrivalAirport'
]);

// Supprimer un Aéroport d'arrivé
$router->post('/deleteArrivalAirport/{id}', [
    'as' => 'deleteArrivalAirport',
    'uses' => 'ArrivalAirportController@deleteArrivalAirport'
]);

// Update un aéroport d'arrivé
$router->post('/updateArrivalAirport/{id}', [
    'as' => 'updateArrivalAirport',
    'uses' => 'ArrivalAirportController@updateArrivalAirport'
]);
///////////////////////////////////////////////////////////////:

$router->post('/addCompany', [
    'as' => 'addCompany',
    'uses' => 'CompanyController@addCompany'
]);

// Supprimer un aéroport de départ
$router->post('/deleteCompany/{id}', [
    'as' => 'deleteCompany',
    'uses' => 'CompanyController@deleteCompany'
]);

$router->post('/deleteuser/{id}', [
    'as' => 'adduser', 'uses' => 'UserController@deleteuser'
]);

// CRUD Page

$router->get('/CRUDPage', [
    'as' => 'CRUDPage', 'uses' => 'ViewsController@CRUDPage'
]);

// CRUD destinations 

$router->get('/getDestinations', [
    'as' => 'getDestinations', 'uses' => 'ViewsController@getDestinations'
]);
$router->get('/getDestination/{id}', [
    'as' => 'getDestination', 'uses' => 'ViewsController@getDestination'
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

// Update un aéroport de départ
$router->post('/updateCompany/{id}', [
    'as' => 'updateCompany',
    'uses' => 'CompanyController@updateCompany'
]);