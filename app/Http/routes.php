<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('ajoutNumero', 'Controller@index');
Route::post('traitement','validation@validation');

Route::post('recherche', 'morgane@rechercheNumero');



Route::post('insertSignal', 'alvin@passId');

Route::get('a_propos', 'alvin@index');