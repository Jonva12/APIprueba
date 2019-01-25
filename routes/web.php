<?php

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
use GuzzleHttp\Client;

Route::get('/', function () {

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://swapi.co/api/',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);
	$response = $client->request('GET', 'planets');
    return view('welcome');
});
