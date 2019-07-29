@extends('templates.layout')

@section('title', 'Loja')

@section('content')
<div class="container">
    <div class="row">
        <h3 class="center"> {{$title}} </h3>
    </div>
    <form action="{{route('providers.update', $provider->id) }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.providers._form')
        <button class="btn btn-success">Salvar</button>
        <a href="{{ route('providers.index')}}" class="btn btn-danger">Cancelar</a>
    </form>
  </div>
 </div>

@endsection
