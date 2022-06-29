<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Compra;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'categoria'];

    public function compras(){
        return $this->belongsTo(Compra::class);
    }
}
