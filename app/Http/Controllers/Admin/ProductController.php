<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Admin\Category;

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
        $categories = Category::all();
        $title = 'Cadastro de Produtos';
        return view('admin.products.create', compact('title', 'categories'));
    }

    public function store(Request $request) {
        $dados = $request->all();
        //Verifica se o produto está ativo
        if (isset($dados['ativo'])) {
            $dados['ativo'] = 'sim';
        }else {
            $dados['ativo'] = 'nao';
        }
        //salva o caminho da imagem do produto
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
        //edita o produto pelo seu id
        $product = Product::find($id);
        $categories = Category::all();
        $title = 'Editando Produto';
        return view('admin.products.edit', compact('product', 'categories', 'title'));
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

