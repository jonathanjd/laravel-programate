@extends('plantilla.base')
@section('title', 'Editar Categoría')
@section('content')

    @include('partials.admin.navbarLogin')

    <div class="container">
        <h1>Editar</h1>
        <hr>
        @include('partials.admin.errorMessage')
        <div class="col-md-6">
        {!! Form::open(['action' => ['CategoryController@update', $category], 'method' => 'PUT','class' => 'form-horizontal']) !!}
            
            <div class="form-group">
                {!! Form::label('name', 'Nombre:', ['class' => 'control-label col-md-2']) !!}
                <div class="col-md-10">
                    {!! Form::text('name', $category->name, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        {!! Form::close() !!}
        </div>

    </div>

@endsection