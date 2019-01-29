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

// Accès à la page : accueil
route::get('/',function(){
    $actus = DB::table('event')->where('id_status',7)->get();
    $connectUser4 = DB::table('center')->get();
    $centers = $connectUser4;
    return view('welcome',compact('actus','centers')); 
}); 
// Connection au site web
route::post('/Connection',function(){
    
    $connectUser = DB::table('user')->select('user_mail')->where('user_mail',$_POST['E-mail'])->first();
    $connectUser2 = DB::table('user')->select('user_password')->where('user_password',$_POST['psw2'])->first();
    $connectUser3 = DB::table('user')->select('id_profile')->where('id_profile',$_POST['Profile'])->first();
    
    $_SESSION['user_mail'] = $connectUser->user_mail;
    $_SESSION['user_password'] = $connectUser2->user_password;
    
    $actus = DB::table('event')->where('id_status',7)->get();
    $change = DB::table('user')->where('user_mail',$_SESSION['user_mail'])->update(['user_connection_status' => 1]);
   return view('welcome2',compact('actus'));
})->name('Connection');


// Accès à la page : boutique
Route::get('/boutique', function () {
    $products = DB::table('product')->get();
    $connectUser4 = DB::table('center')->get();
    $centers = $connectUser4;
   return view('boutique', compact('products','centers'));
   
});

// // Fonctionnalité : commander un produit 
Route::post('/boutique', function () {
    $commanduser = DB::table('user')->select('id_user','user_mail')->where('user_mail',$_POST['E-mail'])->first();
    $idusercommand  =  $commanduser->id_user;
    $products = DB::table('product')->get();
    $commande = DB::table('command')->get();
    $Quantite = DB::table('contenir')->insert([
        ['id_product'=>$products->id_product,'id_command'=>$commande->id_command, 'quantité'=>1]
    ]);
    $date = date("l jS \of F Y h:i:s A");
    $addcommand = DB::table('command')->insert(['command_time'=>$date,'id_user'=>$idusercommand,'id_status'=>3]);
    return view('boutique', compact('products'));
})->name('Commander');

// Accès à la page : événement
Route::get('/événement', function () {
    $events = DB::table('event')->where('id_status',7)->get();
    $connectUser4 = DB::table('center')->get();
    $centers = $connectUser4;
    
    
     return view('événement', compact('events','centers'));
});
// Accès à la page : boite idées
Route::get('/boite_idee', function () {
    $ideas = DB::table('event')->where('id_status',4)->get();
    $connectUser4 = DB::table('center')->get();
    $centers = $connectUser4;
    return view('boite_idées',compact('ideas','centers'));
});
// Fonctionnalité : Ajout d'une idée
Route::post('/boite_idee', function(){
    
    $finduser = DB::table('user')->select('id_user')->where('user_mail', $_POST['E-mail'])->first();
    if($finduser == null){
    } else {
       $iduser = $finduser->id_user; 
        $addIdea = DB::table('event')->insert([
        ['event_name'=>$_POST['eventname'],'event_description'=>$_POST['Desc'],'id_user'=>$iduser,'event_location'=> $_POST['Location'],'id_status'=>4]]);  
    }
    $image = DB::table('picture')->insert([
        ['picture_root'=>$_POST['Image'],'id_user'=>$iduser ]
    ]);
    $ideas = DB::table('event')->where('id_status',4)->get();
    return view('boite_idées',compact('ideas'));  
})->name('Poster');

// Fonctionnalité : Inscription
Route::post('/Inscription', function () {
    $addusers = DB::table('user')->insert(
        ['user_name' => $_POST['Name'],'user_firstname' =>$_POST['FName'],'user_mail'=>$_POST['E-mail'],'user_password'=>$_POST['psw'],'Id_center'=> $_POST['Center'],]
        
    );
   // $_SESSION['user'] = $_POST['E-mail'];
   $actus = DB::table('event')->where('id_status',7)->get();
   $connectUser4 = DB::table('center')->get();
   $centers = $connectUser4;
    
return view('welcome',compact('actus','centers'));
})->name('Inscription');

