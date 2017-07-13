@extends('plantilla.base')
@section('title', 'Eliminar Categoría')
@section('content')
    
    @include('partials.admin.navbarLogin')

    <div class="container">
        <h1>Eliminar Categoría</h1>
        <hr>
        {!! Form::open(['action' => ['CategoryController@destroy', $category], 'method' => 'DELETE']) !!}
            <p>¿Deseas <strong>Eliminar</strong> la categoría <strong>{{ $category->name }}?</strong></p>
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

@endsection