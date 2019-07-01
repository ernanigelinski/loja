@extends('site.template.layout')
@section('title')

@section('content')

<div class="container">
    <h3 class="center"> {{ $title }}</h3>
    <div class="row">
        @foreach ($products as $product)
            <div class="col s12 m3">
                <div class="card">
                    <div class="card-image">
                    <img src="{{asset($product->imagem)}}">
                    </div>
                    <div class="card-content">
                    <h4>{{$product->referencia}}</h4>
                    <h4>{{$product->descricao}}</h4>
                    <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                    <a href="#">Ver mais ...</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection
