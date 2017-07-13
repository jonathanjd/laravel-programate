@extends('plantilla.base')
@section('title', 'Mostrar Artículo')
@section('content')
    
    @include('partials.admin.navbarLogin')

    <div class="container">
        @include('flash::message')
        <h1>Mostrar Artículo</h1>
        <hr>
        <img class="img-responsive center-block img-thumbnail" src="{{ asset('img/articles/'. $article->image->name) }}" alt="">
        <h3>{{ $article->title }}</h3>
        <p>{!! $article->content !!}</p>
    </div>

@endsection