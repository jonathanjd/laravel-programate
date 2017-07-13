@extends('plantilla.base')
@section('title', 'Eliminar Artículo')
@section('content')
    
    @include('partials.admin.navbarLogin')

    <div class="container">
        <h1>Eliminar Artículo</h1>
        <hr>
        {!! Form::open(['action' => ['ArticleController@destroy', $article], 'method' => 'DELETE']) !!}
            <p>¿Deseas <strong>Eliminar</strong> el artículo <strong>{{ $article->title }}?</strong></p>
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

@endsection