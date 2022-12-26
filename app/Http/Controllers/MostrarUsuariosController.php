<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
class MostrarUsuariosController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function mostrar(){
      
       // dd('mostrar usuarios');
       $user = User::all();
        return view('usuarios',compact('user'));

    }

    public function vincular(){
        //dd('acceso');
        $user = User::all();
        return view('usuarios',compact('user'));
   }
}
