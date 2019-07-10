@extends('site.template.layout')
@section('title')

@section('content')

<div class="container">
  <div class="row">
        <h3 class="center">{{$title}}</h3>
    <div class="row">
        <a class="btn green" href="{{ route('compras.create') }}">Adicionar</a>
    </div>
    <table>
       <thead>
          <tr>
            <th>Nota</th>
            <th>Fornecedor</th>
            <th>Data de Emissão</th>
            <th>Condição de Pagamento</th>
            <th>produto</th>
            <th>Quantidade</th>
            <th>Custo</th>
            <th>Desconto</th>
            <th>Preço</th>
            <th>Total</th>
            <th>Tipo</th>
            <th>Compra_id</th>
          </tr>
       </thead>
       <tbody>
         @foreach ($compras as $compra)
          <tr>
            <td>{{$compra->Nota}}</td>
            <td>{{$compra->fornecedor_id}}</td>
            <td>{{$compra->data_emissao}}</td>
            <td>{{$compra->condicao_pagamento}}</td>
            <td>{{$compra->produto_id}}</td>
            <td>{{$compra->quantidade}}</td>
            <td>{{$compra->custo}}</td>
            <td>{{$compra->desconto}}</td>
            <td>{{$compra->preco}}</td>
            <td>{{$compra->total}}</td>
            <td>{{$compra->tipo}}</td>
            <td>{{$compra->id}}</td>
            <td>
            <a class="btn blue" href="{{ route('compras.edit', $compra->id) }}">Editar</a>
            </td>
          </tr>
         @endforeach
       </tbody>
    </table>
  </div>
</div>
@endsection
