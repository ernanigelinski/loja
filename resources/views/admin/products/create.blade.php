@extends('templates.layout')

@section('content')

<div class="container">
    <div class="row">
        <h3 class="center">{{$title}}</h3>
    </div>
        <form action="{{route('products.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.products._form')
        <div class="box-footer">
            <button class="btn btn-success" >Salvar</button>
            <a href="{{route('products.index')}}" class="btn btn-danger">Cancelar</a>
        </div>
        </form>
    </div>

@endsection
