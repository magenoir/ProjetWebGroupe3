<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CommentController extends Controller
{
    public function Comment(){
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

    }
}
