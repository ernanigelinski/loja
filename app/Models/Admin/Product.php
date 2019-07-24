<?php

namespace App\models\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model{

    protected $table = 'products';

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
    ];

    public function category(){

        return $this->belongsTo(Category::class);
    }

    public function providers(){

        return $this->belongsToMany(Provider::class);
    }

}
