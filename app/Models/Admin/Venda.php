<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = [
        'cliente_id',
        'produto_id',
        'Nota',
        'data_emissao',
        'desconto',
        'condicao_pagamento',
        'quantidade',
        'custo',
        'preco',
        'total',
        'tipo',
    ];
}
