@extends('templates.layout')
@section('title')

@section('content')

<div class="container">
  <br>
  <a class="btn btn-primary" href="{{ route('products.create') }}">Adicionar</a>
  <br><br>
        <h3 class="center">{{$title}}</h3>
    <div class="table-responsive">
    <table class='table table-responsive table-bordered'>
       <thead class="thead-light">
          <tr>
            <th>Id</th>
            <th>Descrição</th>
            <th>Referencia</th>
            <th>Unidade</th>
            <th>NCM</th>
            <th>EAN</th>
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
            <td>{{$product->unidade}}</td>
            <td>{{$product->ncm}}</td>
            <td>{{$product->ean}}</td>
            <td>{{$product->custo}}</td>
            <td>{{$product->preco}}</td>
            <td>{{$product->ativo}}</td>
            <td><img height="60" src="{{asset($product->imagem)}}" alt=""/></td>
            <td>
            <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Editar</a>
            </td>
          </tr>
         @endforeach
       </tbody>
    </table>
  </div>

@endsection
