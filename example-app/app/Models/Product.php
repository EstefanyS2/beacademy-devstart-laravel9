<?php 

namespace App\Models;

use IIIuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class Products extends EloquentModel
{
    protected $fillable = [
        'nome',
        'descrição',
        'foto',
        'quantidade',
        'preço',
        'preço de venda'
    ];
}