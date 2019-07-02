@extends('site.template.layout')
@section('title')

@section('content')

<div class="container">
  <div class="row">
        <h3 class="center">Lista de Produtos</h3>
    <div class="row">
        <a class="btn green" href="{{ route('products.create') }}">Adicionar</a>
    </div>
    <table>
       <thead>
          <tr>
            <th>id</th>
            <th>Descrição</th>
            <th>Referencia</th>
            <th>Familia</th>
            <th>Grupo</th>
            <th>Subgrupo</th>
            <th>Unidade</th>
            <th>NCM</th>
            <th>Custo</th>
            <th>Preço</th>
            <th>Ativo</th>
            <th>Imagem</th>
          </tr>
       </thead>
       <tbody>
         @foreach ($products as $product)
          <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->descricao}}</td>
            <td>{{$product->referencia}}</td>
            <td>{{$product->familia}}</td>
            <td>{{$product->grupo}}</td>
            <td>{{$product->subgrupo}}</td>
            <td>{{$product->unidade}}</td>
            <td>{{$product->ncm}}</td>
            <td>{{$product->custo}}</td>
            <td>{{$product->preco}}</td>
            <td>{{$product->ativo}}</td>
            <td><img height="60" src="{{asset($product->imagem)}}" alt=""/></td>
            <td>
            <a class="btn blue" href="{{ route('products.edit', $product->id) }}">Editar</a>
            <a class="btn red" href="{{ route('products.destroy', $product->id) }}">Excluir</a>
            </td>
          </tr>
         @endforeach
       </tbody>
    </table>
  </div>
</div>


@endsection
