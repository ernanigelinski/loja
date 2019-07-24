@extends('templates.layout')
@section('title')

@section('content')

<div class="container">
    <div class="row">
        <h3>{{$title}}</h3>
    </div>
    <div class="row">
        <a class="btn btn-primary" href="{{ route('categories.create') }}">Adicionar</a>
    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table table-responsive table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                    </tr>
                </thead>
                <tbody>
            @forelse ($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->nome}}</td>
                        <td style="width: 180px;">
                        <a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">Editar</a>
                        </td>
    @empty
        <p>Nenhum registro encontrado</p>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
