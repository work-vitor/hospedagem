<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateCompra;
use App\Models\Compra;

class CompraController extends Controller
{
    //cadastrar compra
    public function store(StoreUpdateCompra $request){
        Compra::create($request->all());
        return redirect()->route('index');
    }
}
