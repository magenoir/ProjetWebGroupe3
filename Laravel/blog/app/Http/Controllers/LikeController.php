<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function Like(){
        $muser = DB::table('user')->select('user_mail')->where('user_mail',Session::get('mail'))->first();
        $GetUserIdea = DB::table('user')->select('user_id')->where('user_mail',$muser)->first();
        $like = DB::table('liker_event')->insert([
            'id_event' => 9,
            'id_user' => 4
        ]);
        $centers = DB::table('center')->get();
        $events = DB::table('event')->where('id_status',7)->get();
        $ideventcomment = DB::table('commenter')->join('event','commenter.id_event','=','event.id_event')->join('user','user.id_user','=','commenter.id_user')->get();
        $commentaires = DB::table('commenter')->get();
        
            
        return view('événement', compact('centers','events','commentaires','ideventcomment'));
    }
}
