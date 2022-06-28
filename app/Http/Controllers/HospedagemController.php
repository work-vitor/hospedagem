<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospedagem;

class HospedagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospedagens = Hospedagem::orderBy('nome')->paginate(5);

        return view ('index', compact('hospedagens'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hospedagens = Hospedagem::find($id);
        return view('show', compact('hospedagens'));
    }

    

    public function search(Request $request){
        $filters= $request->except('_token');
        $hospedagens = Hospedagem::where('nome', 'LIKE', "%$request->search%")->paginate();
        return view('index', compact('hospedagens', 'filters'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function compra($id){
        $hospedagens = Hospedagem::find($id);
        return view('compra', compact('hospedagens'));
    }
}
