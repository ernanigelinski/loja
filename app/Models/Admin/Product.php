<?php

namespace App\models\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model{

        protected $fillable = [
            'descricao',
            'referencia',
            'familia',
            'grupo',
            'subgrupo',
            'unidade',
            'ncm',
            'custo',
            'preco',
            'ativo',
            'imagem',
        ];
}
