@extends('templates.layout')

@section('content')

        <form action="{{ route('categories.update', $category->id) }}" method="post">
        {{ csrf_field() }}
        {{method_field('PUT')}}
        @include('admin.categories._form')
        <div class="box-footer">
            <button class="btn btn-success" type="submit">Salvar</button>
            <a href="{{route('categories.index')}}" class="btn btn-danger">Cancelar</a>
        </div>
        </form>

@endsection
