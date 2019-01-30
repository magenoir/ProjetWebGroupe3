<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller

{

	public function __construct()

	{

	    $this->middleware('auth');

	}


	public function galerie(Request $request)

	{

	    $this->validate($request, [

	        'photo' => 'required|image|min:jpeg,png,jpg,gif,svg|max:2048',

	    ]);


	    $photo = $request->file('photo');

	    $input['photoname'] = time().'.'.$image->getClientOriginalExtension();

	    $destinationPath = public_path('/images/min');

	    $photo->move($destinationPath, $input['photoname']);


	    $this->postPhoto->add($input);


	    return back()->with('success','Image Upload successful');

	}

}

?>