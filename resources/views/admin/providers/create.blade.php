@extends('templates.layout')

@section('content')

<div class="container">
    <div class="row">
        <h3 class="center">{{$title}}</h3>
    </div>
        <form action="{{route('providers.store') }}" method="POST">
        {{ csrf_field() }}
        @include('admin.providers._form')
        <div class="box-footer">
            <button class="btn btn-success" >Salvar</button>
            <a href="{{route('providers.index')}}" class="btn btn-danger">Cancelar</a>
        </div>
        </form>
    </div>
</div>
@endsection
