<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hospedagem;
use App\Models\Compra;

class Quarto extends Model
{
    use HasFactory;

    protected $fillable = ['hospedagems_id', 'qtd_leitos', 'qtd_leito_ocupado'];

    public function hospedagems(){
        return $this->belongsTo(Hospedagem::class);
    }

    public function compras(){
        return $this->belongsTo(Compra::class);
    }
}
