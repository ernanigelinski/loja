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
            $table->string('imagem')->nullable($value = true);
            $table->string('unidade');
            $table->integer('ncm');
            $table->string('ean');
            $table->decimal('custo',8,2);
            $table->decimal('preco',8,2);
            $table->enum('ativo', ['sim', 'nao'])->default('sim');
            $table->timestamps();

            $table->unsignedBigInteger('category_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
