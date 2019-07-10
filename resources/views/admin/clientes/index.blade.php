@extends('site.template.layout')
@section('title')

@section('content')

<div class="container">
  <div class="row">
        <h3 class="center">{{$title}}</h3>
    <div class="row">
        <a class="btn green" href="{{ route('clientes.create') }}">Adicionar</a>
    </div>
    <table>
       <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>RG</th>
            <th>Data Nascimento</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Numero</th>
            <th>Bairro</th>
            <th>CEP</th>
            <th>Cidade</th>
            <th>UF</th>
            <th>E-mail</th>
            <th>Ativo</th>
          </tr>
       </thead>
       <tbody>
         @foreach ($clientes as $cliente)
          <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->nome}}</td>
            <td>{{$cliente->cpf}}</td>
            <td>{{$cliente->rg}}</td>
            <td>{{$cliente->data_nascimento}}</td>
            <td>{{$cliente->telefone}}</td>
            <td>{{$cliente->endereco}}</td>
            <td>{{$cliente->numero}}</td>
            <td>{{$cliente->bairro}}</td>
            <td>{{$cliente->cep}}</td>
            <td>{{$cliente->cidade}}</td>
            <td>{{$cliente->uf}}</td>
            <td>{{$cliente->email}}</td>
            <td>{{$cliente->ativo}}</td>
            <td>
            <a class="btn blue" href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
            </td>
          </tr>
         @endforeach
       </tbody>
    </table>
  </div>
</div>
@endsection
