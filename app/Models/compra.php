<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;
use App\Models\Quarto;

class Compra extends Model
{
    use HasFactory;
    protected $fillable = ['usuarios_id', 'quartos_id','valor_total', 'categoria', 'check-in', 'check-out', 'opcao_servico'];

    public function usuarios(){
        return $this->hasOne(Usuario::class);
    }

    public function quartos(){
        return $this->hasOne(Quarto::class);
    }
}
