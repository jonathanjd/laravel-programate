@extends('plantilla.base')
@section('title', 'Editar User')
@section('content')

    @include('partials.admin.navbarLogin')

    <div class="container">
        <h1>Editar Usuario</h1>
        <hr>
        @include('partials.admin.errorMessage')
        @include('flash::message')
        <div class="col-md-6">

        {!! Form::open(['action' => ['UserController@update', Auth::user()->id], 'method' => 'PUT','class' => 'form-horizontal']) !!}

            
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre:', ['class' => 'control-label col-md-2']) !!}
                <div class="col-md-10">
                    {!! Form::text('name', Auth::user()->name, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('contraseña', 'Contraseña:', ['class' => 'control-label col-md-2']) !!}
                <div class="col-md-10">
                    {!! Form::password('password', ['class' => 'form-control']) !!}
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
    @ckeditor('article-ckeditor')
@endsection

