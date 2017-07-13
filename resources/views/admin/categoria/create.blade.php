@extends('plantilla.base')
@section('title', 'Crear Categoría')
@section('content')

    @include('partials.admin.navbarLogin')

    <div class="container">
        <h1>Crear Categoría</h1>
        <hr>
        @include('partials.admin.errorMessage')
        <div class="col-md-6">
        {!! Form::open(['action' => 'CategoryController@store', 'method' => 'POST','class' => 'form-horizontal', 'data-parsley-validate' => '']) !!}
            
            <div class="form-group">
                {!! Form::label('name', 'Nombre:', ['class' => 'control-label col-md-2']) !!}
                <div class="col-md-10">
                    {!! Form::text('name', null, ['class' => 'form-control', 'minlength' => '5', 'maxlength' => '120']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        {!! Form::close() !!}
        </div>

    </div>

@endsection