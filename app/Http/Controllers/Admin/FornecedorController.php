<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Fornecedor;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fornecedor = new Fornecedor();
        $fornecedores = $fornecedor->all();
        $title = "Lista de Fornecedores";
        return view('admin.fornecedores.index', compact('fornecedores', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Cadastro de Fornecedores";
        return view('admin.fornecedores.create', compact('title'));
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

        if (isset($dados['ativo'])) {
            $dados['ativo'] = 'sim';
        }else {
            $dados['ativo'] = 'nao';
        }

        Fornecedor::create($dados);

        return redirect()->route('fornecedores.index');
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
        $forn = new Fornecedor();
        $fornecedor = $forn->find($id);
        $title = "Editando Fornecedor";
        return view('admin.fornecedores.edit', compact('fornecedor', 'title'));
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

        if (isset($dados['ativo'])) {
            $dados['ativo'] = 'sim';
        }else {
            $dados['ativo'] = 'nao';
        }

        Fornecedor::find($id)->update($dados);

        return redirect()->route('fornecedores.index');
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
