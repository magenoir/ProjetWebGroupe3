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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function () {
    return 'formulaire reçu';
});

Route::get('/boutique', function () {
    return view('boutique');
});

Route::get('/événement', function () {
    return view('evenement');
});

Route::get('/boite_idee', function () {
    return view('boite_idées');
});

Route::post('/boite_idee', function () {
    return 'formulaire reçu';
});
