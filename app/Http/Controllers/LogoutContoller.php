<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutContoller extends Controller
{
    public function cerrarSesion(){
       // dd('logout');
       auth()->logout();

       return redirect()->route('index');
   }
}
