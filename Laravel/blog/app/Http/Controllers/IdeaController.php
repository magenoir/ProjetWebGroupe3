<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class IdeaController extends Controller
{
    public function AddIdea(){
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

    }
}
