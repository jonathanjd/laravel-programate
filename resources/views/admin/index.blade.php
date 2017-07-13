@extends('plantilla.base')
@section('title', 'Modulo Admin')
@section('content')

@include('partials.admin.navBarlogin')

    <div class="container">

        <div class="row">
            <h1 class="text-center">Modulo Admin</h1>
            <hr>
            <div class="col-md-6">
                <a class="btn btn-info btn-lg btn-block" href="{{ route('category.create') }}"><i class="glyphicon glyphicon-plus-sign"></i> Crear Categoría</a>
            </div>
            <div class="col-md-6">
                <a class="btn btn-primary btn-lg btn-block" href="{{ route('article.create') }}"><i class="glyphicon glyphicon-plus-sign"></i> Crear Artículo</a>
            </div>

            <div class="col-md-6">
                <hr>
                <h3>Mis Categorías</h3>
                <ul class="list-group">
                    @foreach($categories as $category)
                        <a href="#" class="list-group-item">{{ $category->name }}</a>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-6">
                <hr>
                <h3>Mis Artículos</h3>
                <ul class="list-group">
                    @foreach($articles as $article)
                        <a href="#" class="list-group-item">{{ $article->title }}</a>
                    @endforeach
                </ul>
            </div>
        </div>
        
    </div>

@endsection