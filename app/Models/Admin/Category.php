<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    public $timestamps = false;
    protected $fillable = [
        'nome',
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
