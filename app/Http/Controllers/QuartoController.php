<?php

namespace App\Http\Controllers;

use App\Models\Quarto;
use Illuminate\Http\Request;

class QuartoController extends Controller
{

    //Dados para view compra
    public function compra($id){
        $quartos = Quarto::find($id);
        return view('compra', compact('quartos'));
    }
}
