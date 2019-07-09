@extends('site.template.layout')
@section('title')

@section('content')

<div class="container">
  <div class="row">
        <h3 class="center">{{$title}}</h3>
    <div class="row">
        <a class="btn green" href="{{ route('clients.create') }}">Adicionar</a>
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
         @foreach ($clients as $client)
          <tr>
            <td>{{$client->id}}</td>
            <td>{{$client->nome}}</td>
            <td>{{$client->cpf}}</td>
            <td>{{$client->rg}}</td>
            <td>{{$client->data_nascimento}}</td>
            <td>{{$client->telefone}}</td>
            <td>{{$client->endereco}}</td>
            <td>{{$client->numero}}</td>
            <td>{{$client->bairro}}</td>
            <td>{{$client->cep}}</td>
            <td>{{$client->cidade}}</td>
            <td>{{$client->uf}}</td>
            <td>{{$client->email}}</td>
            <td>{{$client->ativo}}</td>
            <td>
            <a class="btn blue" href="{{ route('clients.edit', $client->id) }}">Editar</a>
            </td>
          </tr>
         @endforeach
       </tbody>
    </table>
  </div>
</div>
@endsection
