<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Product;

class ProductController extends Controller {



    public function index(){

        $product = new Product();
        $products = $product->all();
        //para fazer a paginação na view
        //$products = $product->paginate(10);
        $title = "Lista de Produtos";
        return view('admin.products.index', compact('products', 'title'));
    }

    public function create() {

        $title = 'Cadastro de Produtos';
        return view('admin.products.create', compact('title'));
    }

    public function store(Request $request) {
        $dados = $request->all();

        if (isset($dados['ativo'])) {
            $dados['ativo'] = 'sim';
        }else {
            $dados['ativo'] = 'nao';
        }

        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/products/";
            $ext = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ext;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Product::create($dados);

        return redirect()->route('products.index');
    }

    public function edit($id){
        //recupera o produto pelo seu id
        $prod = new Product();
        $product = $prod->find($id);
        $title = 'Editando Produto';
        return view('admin.products.edit', compact('product', 'title'));
    }

    public function update(Request $request, $id) {
        $dados = $request->all();

        if (isset($dados['ativo'])) {
            $dados['ativo'] = 'sim';
        }else {
            $dados['ativo'] = 'nao';
        }

        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/products/";
            $ext = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ext;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Product::find($id)->update($dados);

        return redirect()->route('products.index');
    }

    public function destroy($id){
    "Exclusão não implementada";
    }
}

