<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagesController extends Controller
{
    public function home()
    {
        $actus = DB::table('event')->where('id_status',7)->get();
        $centers = DB::table('center')->get();
   
    return view('welcome',compact('actus','centers')); 
    }

    public function event() {
        $centers = DB::table('center')->get();
        $events = DB::table('event')->where('id_status',7)->get();
        $commentaires = DB::table('commenter')->get();
        $idCommentaires = DB::table('commenter')->select('id_user')->get();
        // $UserCommentaires = DB::table('user')->where('user.id_user','commenter.id_user')->get();
        $ideventcomment = DB::table('commenter')->join('event','commenter.id_event','=','event.id_event')->join('user','user.id_user','=','commenter.id_user')->get();
        //dd($ideventcomment);
        return view('événement', compact('centers','events','commentaires','ideventcomment'));
    }

    public function galerie() {
        $actus = DB::table('event')->where('id_status',7)->get();
        $connectUser4 = DB::table('center')->get();
        $centers = $connectUser4;
        return view('galerie',compact('actus','centers')); 
    }

    public function boite_idee(){
        $ideas = DB::table('event')->where('id_status',4)->get();
        $connectUser4 = DB::table('center')->get();
        $centers = $connectUser4;
        return view('boite_idées',compact('ideas','centers'));

    }
    public function boutique(){
        $products = DB::table('product')->get();
        $connectUser4 = DB::table('center')->get();
        $centers = $connectUser4;
        $picture = DB::table('picture')->select('picture_root')->where('id_picture',2)->first();
        //dd($picture->picture_root);   
       return view('boutique', compact('products','centers','picture'));
    }
    public function mentions(){
        $connectUser4 = DB::table('center')->get();
        $centers = $connectUser4;
      return view('mentionslegales', compact('centers'));
    }

    public function login()
    {
        $actus = DB::table('event')->where('id_status',7)->get();
        $centers = DB::table('center')->get();
   
        return view('/auth/login',compact('centers','actus')); 
    }
    public function register()
    {
        $actus = DB::table('event')->where('id_status',7)->get();
        $centers = DB::table('center')->get();
   
        return view('/auth/register',compact('centers','actus')); 
    }
}
