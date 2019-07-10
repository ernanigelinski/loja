@extends('site.template.layout')
@section('title')

@section('content')

<div class="container">
  <div class="row">
        <h3 class="center">{{$title}}</h3>
    <div class="row">
        <a class="btn green" href="{{ route('vendas.create') }}">Adicionar</a>
    </div>
    <table>
       <thead>
          <tr>
            <th>Nota</th>
            <th>Cliente</th>
            <th>Data de Emissão</th>
            <th>Condição de Pagamento</th>
            <th>produto</th>
            <th>Quantidade</th>
            <th>Desconto</th>
            <th>Preço</th>
            <th>Total</th>
            <th>Tipo</th>
            <th>Venda_id</th>
          </tr>
       </thead>
       <tbody>
         @foreach ($vendas as $venda)
          <tr>
            <td>{{$venda->Nota}}</td>
            <td>{{$venda->cliente_id}}</td>
            <td>{{$venda->data_emissao}}</td>
            <td>{{$venda->condicao_pagamento}}</td>
            <td>{{$venda->produto_id}}</td>
            <td>{{$venda->quantidade}}</td>
            <td>{{$venda->desconto}}</td>
            <td>{{$venda->preco}}</td>
            <td>{{$venda->total}}</td>
            <td>{{$venda->tipo}}</td>
            <td>{{$venda->id}}</td>
            <td>
            <a class="btn blue" href="{{ route('vendas.edit', $venda->id) }}">Editar</a>
            </td>
          </tr>
         @endforeach
       </tbody>
    </table>
  </div>
</div>
@endsection
