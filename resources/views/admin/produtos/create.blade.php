@extends('site.template.layout')

@section('title', 'Loja')

@section('content')
<div class="container">
    <div class="row">
        <h3 class="center">{{$title}}</h3>
        <form action="{{route('produtos.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.produtos._form')
        <button class="btn green" >Salvar</button>
        <a href="{{route('produtos.index')}}" class="btn btn-secondary red">Cancelar</a>
        </form>
    </div>
</div>


@endsection
