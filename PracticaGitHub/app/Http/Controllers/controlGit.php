<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validLogin;

class controlGit extends Controller
{
    function PFormulario(){
        return view('formulario');
    }
    function PTabla(){
        return view('tabla');
    }
    public function procesSolid(validLogin $req){
        return redirect('/')->with('confirm', 'Tu solicitud llego al server :)');
    }
}
