<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao');
            $table->string('referencia');
            $table->string('imagem');
            $table->string('familia');
            $table->string('grupo');
            $table->string('subgrupo');
            $table->string('unidade');
            $table->integer('ncm');
            $table->decimal('custo',5,2);
            $table->decimal('preco',5,2);
            $table->enum('ativo', ['sim', 'nao'])->default('sim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
