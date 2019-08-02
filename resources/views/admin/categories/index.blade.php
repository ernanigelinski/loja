@extends('templates.layout')

@section('content')

@if (!empty($mensagem))
<div class="alert alert-success mt-2">{{$mensagem}}</div>
@endif

<div class="container">
<h3 class=" text-center">{{$title}}</h3>
<div class="row justify-content-end">
    <div class="col-6">
        <a class="btn btn-primary" href="{{ route('categories.create') }}">Adicionar</a>
    </div>
    <div class="col-6">
<form action="{{route('categories.search')}}" method="post" class="form-inline">
    <input type="hidden" name="_token" value="{{{csrf_token()}}}">
    <div class="form-group">
        <label for="pesquisa"></label>
        <input type="text" name="pesquisa" id="pesquisa" class="form-control ml-2" placeholder="Pesquisar">
    </div>
    <input type="submit" class="btn btn-primary ml-2" value="Pesquisar">
</form>
    </div>
</div>
    @if (count($categories)==0)
        <div class="alert alert-danger mt-2">Nenhuma categoria encontrado</div>
    @else
        <table class="table mt-2 text-center">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                </tr>
            @foreach ($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->nome}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
</div>

@endsection
