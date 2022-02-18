<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use DB;
use Auth;

class UserController extends Controller     
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
       $this->addRole();

       $usuario = Auth::user();
       //dd($user->name);
       $users = User::all();
        return view ('user.index',[
            'users'=>$users, 
            'usuario'=>$usuario
        ]);
    }

    public function addRole()
    {
        //Necesitamos un id de usuario y un role_id
        $user = User::find(1);

        $role = Role::find(2);
        $user->addRole($role);
        
        
    }

    }