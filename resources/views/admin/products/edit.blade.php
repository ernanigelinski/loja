@extends('templates.layout')

@section('title', 'Loja')

@section('content')
<div class="container">
    <div class="row">
        <h3 class="center"> {{$title}} </h3>
    </div>
    <form action="{{route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.products._form')
        <button class="btn btn-success">Salvar</button>
        <a href="{{ route('products.index')}}" class="btn btn-danger">Cancelar</a>
    </form>
 </div>


@endsection
