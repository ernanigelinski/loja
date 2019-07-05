@extends('site.template.layout')

@section('title', 'Loja')

@section('content')
<div class="container">
    <div class="row">
        <h3 class="center">{{$title}}</h3>
        <form action="{{route('clients.store') }}" method="POST">
        {{ csrf_field() }}
        @include('admin.clients._form')
        <button class="btn green" >Salvar</button>
        <a href="{{route('clients.index')}}" class="btn btn-secondary red">Cancelar</a>
        </form>
    </div>
</div>


@endsection
