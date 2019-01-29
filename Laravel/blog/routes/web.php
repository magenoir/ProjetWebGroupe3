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


route::get('/',function(){
    $actus = DB::table('event')->where('id_status',7)->get();
return view('welcome',compact('actus')); 
}); 

route::post('/Connection',function(){
    $connectUser = DB::table('user')->select('user_mail')->where('user_mail',$_POST['E-mail'])->first();
    $connectUser2 = DB::table('user')->select('user_password')->where('user_password',$_POST['psw2'])->first();
    $_SESSION['user_mail'] = $connectUser->user_mail;
    $_SESSION['user_password'] = $connectUser2->user_password;
   // echo $_SESSION['user_mail'];
    $actus = DB::table('event')->where('id_status',7)->get();
   return view('welcome2',compact('actus'));
})->name('Connection');



Route::get('/boutique', function () {
    $products = DB::table('product')->get();
   return view('boutique', compact('products'));
});

Route::post('/boutique', function () {
    $commanduser = DB::table('user')->select('id_user')->where('user_mail',$POST['E-mail'])->get();
    $commanduser = $commanduser->id_user;
    echo $commanduser;
   // $addcommand = DB::table('command')->insert(['command_date'=>$date,'id_user'=>$commanduser,'id_status'=>3
    //]);
   return view('boutique', compact('products'));
});
Route::get('/événement', function () {
    $events = DB::table('event')->where('id_status',4)->get();
     return view('événement', compact('events'));
});
Route::get('/boite_idee', function () {
    return view('boite_idées');
});
Route::post('/boite_idee', function(){
    
    $finduser = DB::table('user')->select('id_user')->where('user_mail', $_POST['E-mail'])->first();
    if($finduser == null){

    } else {
       $iduser = $finduser->id_user; 
        $addIdea = DB::table('event')->insert([
        ['event_name'=>$_POST['Name_Event'],'event_description'=>$_POST['Desc'],'id_user'=>$iduser,'event_location'=> $_POST['Location'],]
        ]);  
    }

    return view('boite_idées');
     
});
Route::post('/', function () {
    $addusers = DB::table('user')->insert(
        ['user_name' => $_POST['Name'],'user_firstname' =>$_POST['FName'],'user_mail'=>$_POST['E-mail'],'user_password'=>$_POST['psw'],'Id_center'=> $_POST['Center'],]
        
    );
   // $_SESSION['user'] = $_POST['E-mail'];
   $actus = DB::table('event')->where('id_status',7)->get();
    
return view('welcome',compact('actus'));
}); 

//Route::post('/boite_idee','AddIdea')->name('BoiteIdée');
