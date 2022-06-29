<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateCompra;
use App\Models\Compra;

class CompraController extends Controller
{   
    //Visualizar Compras
    public function compraShow()
    {
        $compras = Compra::orderBy('id')->paginate(10);

        return view('compraShow', compact('compras'));
    }

    //cadastrar compra
    public function store(StoreUpdateCompra $request)
    {
        Compra::create($request->all());
        return redirect()->route('compraShow');
    }
}
