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
    return view('welcome');
});
Route::post('/', function () {
    

    $prenom = "félix";
    $nom = "arcelin";
    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'http:/localhost:3000/api/',
    ]);

$response = $client->request('POST', 'user/',[
'form_params' => [
    'nom' => $_POST['Name'],
    'prenom' => $_POST['FName']
]
]);
 
if($response->getStatusCode() == 200) {
$body = $response->getBody();
// $arr_body = json_decode($body);

//foreach($arr_body as $arr_body) {
  //  print_r($arr_body);
//  }
}

return view('welcome');
});

//Route::get('/interactions_api.blade.php', function(){
    return view('welcome');
//});
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