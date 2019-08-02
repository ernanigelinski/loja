<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = new Category();
        $categories = $category->all();
        $title = "Lista de Categorias";
        return view('admin.categories.index', compact('categories', 'title'));
        }

        /**Pesquisar categoria */
    public function search(Request $request)
    {
        $title = "Lista de Categorias";
        $pesquisa = Input::get('pesquisa');
        $categories = Category::search($request->pesquisa);
        return view('admin.categories.index', compact('categories', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Cadastro de Categorias";
        $category = new Category();
        $title = "Criar Categoria";
        $mensagem = "Categoria incluída com sucesso!";
        return view('admin.categories.create', compact('category', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        Category::create($dados);
        /**$insert = $categoria->create($dados);
        if($insert){
            return redirect()->route('products.index');
        }else{
            return redirect()->route('products.create');
        }*/
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $title = "Editando Categoria";
        $mensagem = "Categoria alterada com sucesso!";
        return view('admin.categories.edit', compact('category', 'title', 'mensagem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dados = $request->all();
        Category::find($id)->update($dados);
        return redirect()->route('categories.index');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
