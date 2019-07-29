<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{

    protected $table = 'providers';

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
        'celular',
        'email',
        'ativo',
    ];

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
