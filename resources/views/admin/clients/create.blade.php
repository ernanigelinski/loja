@extends('templates.layout')

@section('content')

<div class="container">
    <div class="row">
        <h3 class="center">{{$title}}</h3>
    </div>
        <form action="{{route('clients.store') }}" method="POST">
        {{ csrf_field() }}
        @include('admin.clients._form')
        <div class="box-footer">
            <button class="btn btn-success" >Salvar</button>
            <a href="{{route('clients.index')}}" class="btn btn-danger">Cancelar</a>
        </div>
        </form>
    </div>

@endsection
