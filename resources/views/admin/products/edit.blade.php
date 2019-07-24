@extends('templates.layout')

@section('title', 'Loja')

@section('content')
<div class="container">
        <h3 class="center"> {{$title}} </h3>
  <div class="row">
        <form action="{{route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.products._form')
        <button class="btn green">Salvar</button>
        <a href="{{ route('products.index')}}" class="btn red">Cancelar</a>
    </form>
  </div>
 </div>


@endsection
