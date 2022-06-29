<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Quarto;

class Hospedagem extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'servicos', 'descricao', 'valor', 'foto'];

    public function quartos(){
        return $this->hasMany(Quarto::class);
    }
}
