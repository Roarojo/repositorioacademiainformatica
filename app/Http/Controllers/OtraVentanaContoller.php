<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OtraVentanaContoller extends Controller
{
  
    public function vincular(){
        $user = User::all();
        return view('acceso',compact('user'));
    }

    public function eliminar(User $user){
       // dd('eliminar');
       $user->delete();
       return back()->with('mensaje','Eliminado');
    }


    public function editar(User $user){

       // dd('Editando');

       return redirect()->route('post.editar',$user);


    }
   
}
