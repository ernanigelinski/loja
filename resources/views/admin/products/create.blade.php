@extends('site.template.layout')

@section('title', 'Loja')

@section('content')
<div class="container">
    <div class="row">
        <h3 class="center">Cadastrar Produto</h3>
        <form action="{{route('products.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.products._form')
        <button class="btn green" >Salvar</button>
        <a href="{{route('products.index')}}" class="btn btn-secondary red">Cancelar</a>
        </form>
    </div>
</div>


@endsection
