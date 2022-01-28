<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view ('user.index',['users'=>$users]);
    }
}
