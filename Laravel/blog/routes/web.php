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

route::get('/galerie',function(){
      $actus = DB::table('event')->where('id_status',7)->get();
      $connectUser4 = DB::table('center')->get();
      $centers = $connectUser4;
  return view('galerie',compact('actus','centers')); 
});

// Connection au site web
route::post('/Connection',function(){
    
    $connectUser = DB::table('user')->select('user_mail')->where('user_mail',$_POST['E-mail'])->first();
    $connectUser2 = DB::table('user')->select('user_password')->where('user_password',$_POST['psw2'])->first();
    $idprofile = DB::table('user')->select('id_profile')->where('id_profile',$_POST['Profile'])->first();
    $set_connection = DB::table('user')->insert([
        'user_connection_status' => 1
    ])->where('user_mail',$_POST['E-mail']);
    $_SESSION['user_mail'] = $connectUser->user_mail;
    $mail = $connectUser->user_mail;
    Session::put('mail',$mail);
    $usermail = Session::get('mail');
    $_SESSION['user_password'] = $connectUser2->user_password;
    
    $actus = DB::table('event')->where('id_status',7)->get();
    $change = DB::table('user')->where('user_mail',$_SESSION['user_mail'])->update(['user_connection_status' => 1]);
    $connectUser4 = DB::table('center')->get();
      $centers = $connectUser4;
   return view('welcome',compact('actus','centers','usermail'));
})->name('Connection');

// Commenter un événement
Route::post('/commentaire',function(){

    $events = DB::table('event')->where('id_status',7)->get();
    $finduser = DB::table('user')->select('id_user')->where('user_mail', $_POST['E-mailc'])->first();
    $commentinsert = DB::table('commenter')->insert([
        ['comment'=>$_POST['Comm'],'id_user'=>$finduser->id_user,'id_event'=>3]
    ]);
    
    $comments = DB::table('commenter')->select('comment')->get();
    $connectUser4 = DB::table('center')->get();
    $centers = $connectUser4;
    $ideventcomment = DB::table('commenter')->join('event','commenter.id_event','=','event.id_event')->join('user','user.id_user','=','commenter.id_user')->get();
    $events = DB::table('event')->get();
    //dd($events);
    return view('événement',compact('comments','centers','ideventcomment','events'));
    
})->name('Commenter');

// Accès à la page : boutique
Route::get('/boutique', function () {
    $products = DB::table('product')->get();
    $connectUser4 = DB::table('center')->get();
    $centers = $connectUser4;
    $picture = DB::table('picture')->select('picture_root')->where('id_picture',2)->first();
     

    //dd($picture->picture_root);   
   return view('boutique', compact('products','centers','picture'));
   
});
// Connection sur la page event
Route::post('/evenement',function(){
    $connectUser = DB::table('user')->select('user_mail')->where('user_mail',$_POST['E-mail'])->first();
    $connectUser2 = DB::table('user')->select('user_password')->where('user_password',$_POST['psw2'])->first();
    $connectUser3 = DB::table('user')->select('id_profile')->where('id_profile',$_POST['Profile'])->first();
    $centers = DB::table('center')->get();
    $_SESSION['user_mail'] = $connectUser->user_mail;
    $_SESSION['user_password'] = $connectUser2->user_password;
    $commentaires = DB::table('commenter')->get();
    $ideventcomment = DB::table('commenter')->join('event','commenter.id_event','=','event.id_event')->join('user','user.id_user','=','commenter.id_user')->get();

    $events = DB::table('event')->get();/*->where('id_status',7)*/
    //dd($events);
    return view('événement', compact('events','centers','commentaires','ideventcomment'));
    
})->name('ConnectionEvent');
// Liker un événement
Route::post('/like',function(){
    
    $GetUserIdea = DB::table('user')->select('user_id')->where('user_mail',$_POST['E-mail'])->first();
    $like = DB::table('liker_event')->insert([
        'id_event' => $_POST['E-mail'],
        'id_user' => $GetUserIdea
    ]);
    $centers = DB::table('center')->get();
    $events = DB::table('event')->where('id_status',7)->get();
    $ideventcomment = DB::table('commenter')->join('event','commenter.id_event','=','event.id_event')->join('user','user.id_user','=','commenter.id_user')->get();
    $commentaires = DB::table('commenter')->get();
    
        
    return view('événement', compact('centers','events','commentaires','ideventcomment'));
})->name('Liker');

// Fonctionnalité : commander un produit (ok mais absolument pas souhaité en cas réel)
Route::post('/boutique', function () {
    $commanduser = DB::table('user')->select('id_user','user_mail')->where('user_mail',$_POST['E-mail'])->first();
    $idusercommand  =  $commanduser->id_user;
    $products = DB::table('product')->get();
    $commande = DB::table('command')->get();
    $date = date("l jS \of F Y h:i:s A");
    $addcommand = DB::table('command')->insert(['command_time'=>$date,'id_user'=>$idusercommand,'id_status'=>3]);
    
    return view('boutique', compact('products'));
})->name('Commander');

// Accès à la page : événement (ok)
Route::get('/événement', function () {
    
    $centers = DB::table('center')->get();
    $events = DB::table('event')->where('id_status',7)->get();
    $commentaires = DB::table('commenter')->get();
    $idCommentaires = DB::table('commenter')->select('id_user')->get();
   // $UserCommentaires = DB::table('user')->where('user.id_user','commenter.id_user')->get();
    $ideventcomment = DB::table('commenter')->join('event','commenter.id_event','=','event.id_event')->join('user','user.id_user','=','commenter.id_user')->get();
    //dd($ideventcomment);
     return view('événement', compact('centers','events','commentaires','ideventcomment'));
});
// Accès à la page : boite idées (ok)
Route::get('/boite_idee', function () {
    $ideas = DB::table('event')->where('id_status',4)->get();
    $connectUser4 = DB::table('center')->get();
    $centers = $connectUser4;
    return view('boite_idées',compact('ideas','centers'));
});
// Fonctionnalité : Ajout d'une idée (ok)
Route::post('/boite_idee', function(){
    
    $finduser = DB::table('user')->select('id_user')->where('user_mail', $_POST['E-mail'])->first();
    if($finduser == null){
    } else {
       $iduser = $finduser->id_user; 
        $addIdea = DB::table('event')->insert([
        ['event_name'=>$_POST['event_name'],'event_description'=>$_POST['Desc'],'id_user'=>$iduser,'event_location'=> $_POST['Location'],'id_status'=>4,'event_date'=>$_POST['date']]]);  
    }
    $image = DB::table('picture')->insert([
        ['picture_root'=>$_POST['Image'],'id_user'=>$iduser ]
    ]);
    $ideas = DB::table('event')->where('id_status',4)->get();
    return view('boite_idées',compact('ideas'));  
})->name('Poster');

// Fonctionnalité : Inscription (ok)
Route::post('/Inscription', function () {
    if($_POST['psw'] == $_POST['confpsw'] ){
      UserTableSeeder::run();  
    }
   $actus = DB::table('event')->where('id_status',7)->get();
   $connectUser4 = DB::table('center')->get();
   $centers = $connectUser4;
    
return view('welcome',compact('actus','centers'));
})->name('Inscription');

