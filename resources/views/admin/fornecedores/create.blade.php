@extends('site.template.layout')

@section('title', 'Loja')

@section('content')
<div class="container">
    <div class="row">
        <h3 class="center">{{$title}}</h3>
        <form action="{{route('fornecedores.store') }}" method="POST">
        {{ csrf_field() }}
        @include('admin.fornecedores._form')
        <button class="btn green" >Salvar</button>
        <a href="{{route('fornecedores.index')}}" class="btn btn-secondary red">Cancelar</a>
        </form>
    </div>
</div>


@endsection
