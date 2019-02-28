<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ShopController extends Controller
{
    public function Command(){
        $commanduser = DB::table('user')->select('id_user','user_mail')->where('user_mail',$_POST['E-mail'])->first();
        $idusercommand  =  $commanduser->id_user;
        $products = DB::table('product')->get();
        $commande = DB::table('command')->get();
        $date = date("l jS \of F Y h:i:s A");
        $addcommand = DB::table('command')->insert(['command_time'=>$date,'id_user'=>$idusercommand,'id_status'=>3]);
        
        return view('boutique', compact('products'));
    }
}
