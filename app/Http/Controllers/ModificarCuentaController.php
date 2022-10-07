<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ModificarCuentaController extends Controller
{
    public function modificar(Request $request,$user){
        $request->validate([
            'name'=>'required|max:30',
            'password'=>'required|min:3'
        ]);
        

        $nuser = User::find($user);
        $nuser ->name = $request->name;
        $nuser ->password = Hash::make($request->password);
        $nuser->save();

        return redirect()->route('post.index')->with('modificado','Creado');

    }
}
