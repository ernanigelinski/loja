<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Venda;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $venda = new Venda();
        $vendas = $venda->all();
        $title = "Relação de Vendas";
        return view('admin.vendas.index', compact('vendas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Cadastro de Vendas";
        return view('admin.vendas.create', compact('title'));
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

        if (isset($dados['tipo'])) {
            $dados['tipo'] = 'venda';
        }else {
            $dados['ativo'] = 'devolucao';
        }

        Venda::create($dados);

        return redirect()->route('vendas.index');
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
        $venda = new Venda();
        $vendas = $venda->find($id);
        $title = "Editando Venda";
        return view('admin.vendas.edit', compact('vendas', 'title'));
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

        if (isset($dados['tipo'])) {
            $dados['tipo'] = 'venda';
        }else {
            $dados['tipo'] = 'devolucao';
        }

        Venda::find($id)->update($dados);

        return redirect()->route('vendas.index');
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
