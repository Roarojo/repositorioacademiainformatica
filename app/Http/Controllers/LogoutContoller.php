<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutContoller extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function cerrarsecion(){
     
        auth()->logout();

        return redirect()->route('index');

    }
  


}
