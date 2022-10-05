<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class OtraVentanaContoller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function vincular(User $user){
        //dd(User::all());
        //dd(auth()->user());
        $user = User::all();
        return view('acceso',compact('user'));
   }

   public function eliminar(User $user){
    //dd($user);
     $user->delete();
     return redirect()->route('post.index');
    
   }
}
