<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{

    protected $table = 'fornecedores';

    protected $fillable = [
        'nome',
        'cnpj',
        'ie',
        'cep',
        'endereco',
        'numero',
        'bairro',
        'cidade',
        'uf',
        'telefone',
        'whatsapp',
        'email',
        'ativo',
    ];
}
