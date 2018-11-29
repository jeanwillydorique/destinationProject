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
$router->post('/addDepartureAirport /{id}', [
    'as' => 'addDepartureAirport',
    'uses' => 'AirportController@addDepartureAirport'
]);

// Supprimer un aéroport de départ
$router->post('/deleteDepartureAirport /{id}', [
    'as' => 'deleteDepartureAirport',
    'uses' => 'AirportController@deleteDepartureAirport'
]);

// Update un aéroport de départ
$router->post('/updateDepartureAirport /{id}', [
    'as' => 'updateDepartureAirport',
    'uses' => 'AirportController@updateDepartureAirport'
]);


// Ajouter un aéroport d'arrivé
$router->post('/addArrivalAirport /{id}', [
    'as' => 'addArrivalAirport',
    'uses' => 'AirportController@addArrivalAirport'
]);

// Supprimer un Aéroport d'arrivé
$router->post('/deleteArrivalAirport /{id}', [
    'as' => 'deleteArrivalAirport',
    'uses' => 'AirportController@deleteArrivalAirport'
]);

// Update un aéroport d'arrivé
$router->post('/updateArrivalAirport /{id}', [
    'as' => 'updateArrivalAirport',
    'uses' => 'AirportController@updateArrivalAirport'
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

// Update un aéroport de départ
$router->post('/updateCompany/{id}', [
    'as' => 'updateCompany',
    'uses' => 'CompanyController@updateCompany'
]);
