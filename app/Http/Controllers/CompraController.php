<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateCompra;
use App\Models\Compra;
use App\Models\Quarto;
use Illuminate\Support\Facades\DB;

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
        $data = $request->all();
        $quartos_id = $data['quartos_id'];
        $quarto = Quarto::find(1);
        // $qtd_leito_ocupado
        // $quarto['id'] = $quartos_id;

        // if(){
        //     return redirect()->route('compraShow')->with('message', 'Quarto cheio!');
        // }

        DB::statement("update quartos set qtd_leito_ocupado = qtd_leito_ocupado+1 where id = $quartos_id");

        Compra::create($data);
        return redirect()->route('compraShow')->with('message', 'Compra efetuada com sucesso');
    }

    //Cancelar compra
    public function destroy($id){
        $compras = Compra::find($id);
            if(!$compras){
                return redirect()->route('compraShow')->with('message', 'Não foi possivel cancelar a compra');
            }
            $compras->delete();
            return redirect()->route('compraShow')->with('message', 'Compra cancelada com sucesso');
        }
    }

