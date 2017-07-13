@extends('plantilla.base')
@section('title', 'Mostrar Categoría')
@section('content')
    
    @include('partials.admin.navbarLogin')

    <div class="container">
        @include('flash::message')
        <h1>Mostrar Categoría</h1>
        <hr>
        <h3>{{ $category->name }} <small>Creado:{{ $category->created_at->diffForHumans() }}</small></h3>
    </div>

@endsection