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

    public function vincular(User $user){
        $user = User::all();
        return view('modal',compact('user'));
   }

   public function modificar(User $user){
    //dd($user);
    //$user = User::all();
    return redirect()->route('post.modal',$user);
    
   }

   
}
