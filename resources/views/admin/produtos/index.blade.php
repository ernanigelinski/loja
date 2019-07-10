@extends('site.template.layout')
@section('title')

@section('content')

<div class="container">
  <div class="row">
        <h3 class="center">{{$title}}</h3>
    <div class="row">
        <a class="btn green" href="{{ route('produtos.create') }}">Adicionar</a>
    </div>
    <table>
       <thead>
          <tr>
            <th>Id</th>
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
         @foreach ($produtos as $produto)
          <tr>
            <td>{{$produto->id}}</td>
            <td>{{$produto->descricao}}</td>
            <td>{{$produto->referencia}}</td>
            <td>{{$produto->familia}}</td>
            <td>{{$produto->grupo}}</td>
            <td>{{$produto->subgrupo}}</td>
            <td>{{$produto->unidade}}</td>
            <td>{{$produto->ncm}}</td>
            <td>{{$produto->custo}}</td>
            <td>{{$produto->preco}}</td>
            <td>{{$produto->ativo}}</td>
            <td><img height="60" src="{{asset($produto->imagem)}}" alt=""/></td>
            <td>
            <a class="btn blue" href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
            </td>
          </tr>
         @endforeach
       </tbody>
    </table>
  </div>
</div>


@endsection
