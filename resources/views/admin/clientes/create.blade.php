@extends('site.template.layout')

@section('title', 'Loja')

@section('content')
<div class="container">
    <div class="row">
        <h3 class="center">{{$title}}</h3>
        <form action="{{route('clientes.store') }}" method="POST">
        {{ csrf_field() }}
        @include('admin.clientes._form')
        <button class="btn green" >Salvar</button>
        <a href="{{route('clientes.index')}}" class="btn btn-secondary red">Cancelar</a>
        </form>
    </div>
</div>


@endsection
