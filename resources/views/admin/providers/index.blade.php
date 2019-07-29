@extends('templates.layout')
@section('title')

@section('content')

<div class="container">
  <div class="row">
        <h3 class="center">{{$title}}</h3>
  </div>
    <div class="row">
        <a class="btn btn-primary" href="{{ route('providers.create') }}">Adicionar</a>
    </div>
    <div class="row">
        <div class="table-reponsive">
            <table class="table table-responsive table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>id</th>
                        <th>Nome</th>
                        <th>CNPJ</th>
                        <th>IE</th>
                        <th>Telefone</th>
                        <th>Celular</th>
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
                @foreach ($providers as $provider)
                <tr>
                    <td>{{$provider->id}}</td>
                    <td>{{$provider->nome}}</td>
                    <td>{{$provider->cnpj}}</td>
                    <td>{{$provider->ie}}</td>
                    <td>{{$provider->telefone}}</td>
                    <td>{{$provider->celular}}</td>
                    <td>{{$provider->endereco}}</td>
                    <td>{{$provider->numero}}</td>
                    <td>{{$provider->bairro}}</td>
                    <td>{{$provider->cep}}</td>
                    <td>{{$provider->cidade}}</td>
                    <td>{{$provider->uf}}</td>
                    <td>{{$provider->email}}</td>
                    <td>{{$provider->ativo}}</td>
                    <td>
                    <a class="btn btn-primary" href="{{ route('providers.edit', $provider->id) }}">Editar</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
