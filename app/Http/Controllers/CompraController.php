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
        $this_qtd_leito_ocupado = $quarto->qtd_leito_ocupado;
        $this_qtd_leitos = $quarto->qtd_leitos;

        if($this_qtd_leitos === $this_qtd_leito_ocupado){
            return redirect()->route('compraShow')->with('message', 'Quarto cheio!');
        }
        DB::statement("update quartos set qtd_leito_ocupado = qtd_leito_ocupado+1 where id = $quartos_id");

        Compra::create($data);
        return redirect()->route('compraShow')->with('message', 'Compra efetuada com sucesso');
    }

    //Cancelar compra
    public function destroy($id){
        $compras = Compra::find($id);
        $quarto = Quarto::find(1);

            if(!$compras){
                return redirect()->route('compraShow')->with('message', 'Não foi possivel cancelar a compra');
            }
            DB::statement("update quartos set qtd_leito_ocupado = qtd_leito_ocupado-1 where id = $quarto->id");
            $compras->delete();
            return redirect()->route('compraShow')->with('message', 'Compra cancelada com sucesso');
        }
    }

