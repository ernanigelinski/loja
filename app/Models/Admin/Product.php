<?php

namespace App\models\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model{


    protected $fillable = [
        'descricao',
        'referencia',
        'imagem',
        'unidade',
        'ncm',
        'ean',
        'custo',
        'preco',
        'ativo',
        'category_id'
    ];

    public function category(){

        return $this->belongsTo(Category::class);
    }

}
