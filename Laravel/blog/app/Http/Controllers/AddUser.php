<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AddUser extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function __invoke()
    {
        $users = DB::table('user')->where('id_user', 4);
    }
}