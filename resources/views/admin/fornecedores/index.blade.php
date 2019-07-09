@extends('site.template.layout')
@section('title')

@section('content')

<div class="container">
  <div class="row">
        <h3 class="center">{{$title}}</h3>
    <div class="row">
        <a class="btn green" href="{{ route('fornecedores.create') }}">Adicionar</a>
    </div>
    <table>
       <thead>
          <tr>
            <th>id</th>
            <th>Nome</th>
            <th>CNPJ</th>
            <th>IE</th>
            <th>WhatsApp</th>
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
         @foreach ($fornecedores as $fornecedor)
          <tr>
            <td>{{$fornecedor->id}}</td>
            <td>{{$fornecedor->nome}}</td>
            <td>{{$fornecedor->ie}}</td>
            <td>{{$fornecedor->whatsapp}}</td>
            <td>{{$fornecedor->telefone}}</td>
            <td>{{$fornecedor->endereco}}</td>
            <td>{{$fornecedor->numero}}</td>
            <td>{{$fornecedor->bairro}}</td>
            <td>{{$fornecedor->cep}}</td>
            <td>{{$fornecedor->cidade}}</td>
            <td>{{$fornecedor->uf}}</td>
            <td>{{$fornecedor->email}}</td>
            <td>{{$fornecedor->ativo}}</td>
            <td>
            <a class="btn blue" href="{{ route('fornecedores.edit', $fornecedor->id) }}">Editar</a>
            </td>
          </tr>
         @endforeach
       </tbody>
    </table>
  </div>
</div>
@endsection
