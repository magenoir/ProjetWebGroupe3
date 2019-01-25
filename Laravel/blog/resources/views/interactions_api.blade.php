<?php
        use GuzzleHttp\Client;

        $prenom = "félix";
        $nom = "arcelin";
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http:/localhost:3000/api/',
        ]);

$response = $client->request('POST', 'user/',[
    'form_params' => [
        'nom' => 'Name',
        'prenom' => 'fname'
    ]
]);
     
if($response->getStatusCode() == 200) {
    $body = $response->getBody();
   // $arr_body = json_decode($body);

    //foreach($arr_body as $arr_body) {
      //  print_r($arr_body);
  //  }
}

?>