<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlGit extends Controller
{
    function PFormulario(){
        return view('formulario');
    }
    function PTabla(){
        return view('tabla');
    }
}
