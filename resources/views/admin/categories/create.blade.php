@extends('templates.layout')

@section('content')
<div class="container">
    <div class="row">
        <h3 class="col">{{$title}}</h3>
    </div>
    <div class="row">
        <form action="{{route('categories.store') }}" method="post">
        {{ csrf_field() }}
        @include('admin.categories._form')
        <div class="box-footer">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{route('categories.index')}}" class="btn btn-danger">Cancelar</a>
        </div>
        </form>
    </div>
</div>

@endsection
