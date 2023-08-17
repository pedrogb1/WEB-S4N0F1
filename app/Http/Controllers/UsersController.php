<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->get();
        return view('login', compact('users'));
    }

}



