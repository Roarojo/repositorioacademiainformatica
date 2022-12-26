<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ModificarController extends Controller
{  
public function __construct()
    {
        $this->middleware('auth');
    }
 public function mostrar(User $user){
    //$user = User::all();
    //dd($user);
    return view('modal',compact('user'));
 }
 
 public function modificar(Request $request, $user){ 

  // dd('modificar usuario ',$user);
   $request->validate([
      'name'=>'required|max:30',
      'email'=>'required|unique:users|email|max:60'
  ]);

    $buser = User::find($user);
    $buser -> name =  $request->name;
    $buser -> email = $request ->email;
    $buser->save();

   // return redirect()->route('post.index')->with('modificado','hecho');
   return redirect()->route('mostrar.usuarios')->with('modificado','hecho');

 }
   
}
