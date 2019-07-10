<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = [
        'fornecedor_id',
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
/*
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function fornecedor() {
        return $this->belongsTo(Fornecedor::class);
    }

    public function produto() {
        return $this->belongsTo(Produto::class);
    }*/
}
