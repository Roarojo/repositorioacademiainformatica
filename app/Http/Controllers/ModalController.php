<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ModalController extends Controller
{
    public function vincular(User $user){
      // dd($user);
        return view('modal',compact('user'));
   }
}
