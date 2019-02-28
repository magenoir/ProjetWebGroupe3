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
// Accès aux différentes pages du site
route::get('/','PagesController@home');
route::get('/événement','PagesController@event');
route::get('/galerie','PagesController@galerie');
route::get('/boite_idee','PagesController@boite_idee');
route::get('/boutique','PagesController@boutique');
route::get('/mentions', 'PagesController@mentions');
route::get('auth/login','PagesController@login')->middleware('guest');
route::get('/auth/register','PagesController@register')->middleware('guest');

// Commenter un événement

Route::post('/commentaire','CommentController@Comment')->name('Commenter');

// Liker un événement TODO


// Fonctionnalité : commander un produit (ok mais absolument pas souhaité en cas réel)

Route::post('/boutique','ShopController@Command')->name('Commander');
// Fonctionnalité : Ajout d'une idée (ok)

Route::post('/boite_idee','IdeaController@Addidea')->name('Poster');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
