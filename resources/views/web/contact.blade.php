@extends('plantilla.base') 
@section('title', 'Contáctame') 
@section('style') 
{!! Html::style('css/custom.css') !!}
@endsection
@section('content') 
@include('partials.web.navbar') 
@include('partials.web.portada')

<div class="container">
    <div class="row">
        <h2>Contáctame</h2>
        <div class="col-md-4">
            <img class="img-responsive" src="{{ asset('img/contact.jpg') }}" alt="">
        </div>
        <div class="col-md-8">

            @include('partials.admin.errorMessage')
            @include('flash::message')
            
            {!! Form::open(['route' => 'enviarMensaje', 'method' => 'POST', 'class' => 'well form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('correo', 'Correo', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'Correo']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('asunto', 'Asunto', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('asunto', null, ['class' => 'form-control', 'placeholder' => 'Asunto']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('mensaje', 'Mensaje', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::textarea('mensaje', null, ['class' => 'form-control', 'placeholder' => 'Mi Mensaje']) !!}
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection