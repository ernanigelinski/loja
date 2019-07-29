<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'nome',
        'cpf',
        'rg',
        'cep',
        'endereco',
        'numero',
        'bairro',
        'cidade',
        'uf',
        'telefone',
        'celular',
        'email',
        'ativo',
    ];
}
