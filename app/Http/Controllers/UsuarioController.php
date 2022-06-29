<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    //Dados para view compra
    public function compra($id){
        
        $usuarios = Usuario::find($id);
        return view('compra', compact('usuarios'));
    }
}
