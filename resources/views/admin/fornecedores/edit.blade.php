@extends('site.template.layout')

@section('title', 'Loja')

@section('content')
<div class="container">
        <h3 class="center"> {{$title}} </h3>
  <div class="row">
        <form action="{{route('fornecedores.update', $fornecedor->id) }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.fornecedores._form')
        <button class="btn green">Salvar</button>
        <a href="{{ route('fornecedores.index')}}" class="btn red">Cancelar</a>
    </form>
  </div>
 </div>


@endsection
