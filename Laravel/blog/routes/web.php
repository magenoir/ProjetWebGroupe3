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

Route::post('/inscription',function() {

	$user = DB::table('user')->insert(['user_name' => $_POST['Name'] , 'user_firstname' => $_POST['FName'], 'user_mail' => $_POST['E-mail'], 'user_password' => $_POST['psw'], 'Id_center' => $_POST['Center']]);

    return view('welcome');
});

Route::get('/boite_idee', function () {
    return view('boite_idées');
});

Route::post('/boite_idee', function () {
    return $_POST['Name']." ".$_POST['FName']." devient un ".$_POST['Desc'];
});

Route::get('/boutique', function () {
    return view('boutique');
});

Route::get('/événement', function () {
    return view('evenement');
});

Route::get('/galerie', function () {
    return view('galerie');
});

Route::post('/galerie', function () {
    return view('/galerie');
});

Route::get('/mentions', function () {
    return view('mentions_légales');
});



