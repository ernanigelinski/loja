<?php

namespace App\models\Admin;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model{

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

        public function fornecedores(){
            return $this->belongsToMany(Fornecedor::class);
        }
}
